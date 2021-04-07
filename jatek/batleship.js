document.addEventListener('DOMContentLoaded', () => {
    const felhasznaloTabla = document.querySelector('.tabla-felhasznalo');
    const ellenfelTabla =document.querySelector('.tabla-ellenfel');
    const hajokTabla =document.querySelector('.tabla-hajok');
    const tobbhajo =document.querySelectorAll('.hajo');
    const Rombolo =document.querySelector('.Rombolo-container');
    const Tengeralattjaro =document.querySelector('.Tengeralattjaro-container');
    const Cirkalo =document.querySelector('.Cirkalo-container');
    const Csatahajo =document.querySelector('.Csatahajo-container');
    const Szallitohajo =document.querySelector('.Szallitohajo-container');
    const startButton =document.querySelector('#start');
    const forgatasButton =document.querySelector('#forgatas');
    const turnDisplay =document.querySelector('#kovetkezo');
    const infoDisplay =document.querySelector('#info');
    const infoDisplay2 =document.querySelector('#info2');
    const infoDisplay3 =document.querySelector('#info3');
    const beallitasiButton =document.querySelector('beallitasi-button');
    
    const felhasznaloiTabla = [];
    const szamitogepTabla = [];
    
    let isHorizontal = true;
    let jatekVege = false;
    let Jatekos = 'felhasznalo';
    let osszesHajoFelhelyezese = false;
    const width = 10;
    
    
    createBoard(felhasznaloTabla, felhasznaloiTabla);
    createBoard(ellenfelTabla, szamitogepTabla);
    
    //Create board
    function createBoard(tabla, squares){
        for (let i = 0; i< width*width; i++){
            const square = document.createElement('div');
            square.dataset.id = i;
            tabla.appendChild(square);
            squares.push(square);
        }
    }
    
    //ships
    const hajoArray = [
        {
            name: 'Rombolo',
            directions: [
                [0, 1],
                [0, width]
            ]
        },
        {
            name: 'Tengeralattjaro',
            directions: [
                [0, 1, 2],
                [0, width, width*2]
            ]
        },
        {
            name: 'Cirkalo',
            directions: [
                [0, 1, 2],
                [0, width, width*2]
            ]
        },
        {
            name: 'Csatahajo',
            directions: [
                [0, 1, 2, 3],
                [0, width, width*2, width*3]
            ]
        },
        {
            name: 'Szallitohajo',
            directions: [
                [0, 1, 2, 3, 4],
                [0, width, width*2, width*3, width*4]
            ]
        }
    ];
    
    startButton.addEventListener('click', () =>{
        if(osszesHajoFelhelyezese) Jatekos(startButton);
            else(infoDisplay).innerHTML= "Kérlek a játékhoz helyezd fel az összes hajót a táblára és már Kattinthatsz az ellenfél tábláján!";
            
            
    });
    
    
    
    
    //draw the computers ship in random locations
    function generalas(hajo) {
        let randomSzamitas = Math.floor(Math.random() * hajo.directions.length);
        let current = hajo.directions[randomSzamitas];
        if (randomSzamitas === 0) direction = 1;
        if (randomSzamitas === 1) direction = 10;
        let randomStart = Math.abs(Math.floor(Math.random() * szamitogepTabla.length - (hajo.directions[0].length * direction)));
        
        const Megfogni = current.some(index => szamitogepTabla[randomStart + index].classList.contains('taken'));
        const isAtRightEdge = current.some(index => (randomStart + index) % width === width -1);
        const isAtLeftEdge = current.some(index => (randomStart + index) % width === 0);
        
        if (!Megfogni && !isAtRightEdge && !isAtLeftEdge) current.forEach(index => szamitogepTabla[randomStart + index].classList.add('taken', hajo.name));
        
        else generalas(hajo);
    }
    
    generalas(hajoArray[0]);
    generalas(hajoArray[1]);
    generalas(hajoArray[2]);
    generalas(hajoArray[3]);
    generalas(hajoArray[4]);
    
    startButton.addEventListener('click', () => {
        beallitasiButton.style.display = 'none';
    });
    
    //rotate the ships
    function forgatas() {
        if (isHorizontal) {
            Rombolo.classList.toggle('Rombolo-container-vertical');
            Tengeralattjaro.classList.toggle('Tengeralattjaro-container-vertical');
            Cirkalo.classList.toggle('Cirkalo-container-vertical');
            Csatahajo.classList.toggle('Csatahajo-container-vertical');
            Szallitohajo.classList.toggle('Szallitohajo-container-vertical');
            isHorizontal = false;
            console.log(isHorizontal);
            return;
        }
        if (!isHorizontal) {
            Rombolo.classList.toggle('Rombolo-container-vertical');
            Tengeralattjaro.classList.toggle('Tengeralattjaro-container-vertical');
            Cirkalo.classList.toggle('Cirkalo-container-vertical');
            Csatahajo.classList.toggle('Csatahajo-container-vertical');
            Szallitohajo.classList.toggle('Szallitohajo-container-vertical');
            isHorizontal = true;
            console.log(isHorizontal);
            return;
        }
    }
    forgatasButton.addEventListener('click', forgatas);
    
    //move a round user ship
    tobbhajo.forEach(hajo => hajo.addEventListener('dragstart', Start));
    felhasznaloiTabla.forEach(square => square.addEventListener('dragstart', Start));
    felhasznaloiTabla.forEach(square => square.addEventListener('dragover', Over));
    felhasznaloiTabla.forEach(square => square.addEventListener('dragenter', Enter));
    felhasznaloiTabla.forEach(square => square.addEventListener('dragleave', Leave));
    felhasznaloiTabla.forEach(square => square.addEventListener('drop', Drop));
    felhasznaloiTabla.forEach(square => square.addEventListener('dragend', End));
    
    let kivalasztottHajoNevenekIndexe;
    let vonszoltHajo;
    let vonszoltHajoLength;
    
    tobbhajo.forEach(hajo => hajo.addEventListener('mousedown', (e) => {
        kivalasztottHajoNevenekIndexe = e.target.id;
        console.log(kivalasztottHajoNevenekIndexe);
    }));
    
    function Start() {
        vonszoltHajo = this;
        vonszoltHajoLength = this.childNodes.length;
        console.log(vonszoltHajo);
    }
    
    function Over(e) {
        e.preventDefault();
    }
    
    function Enter(e) {
        e.preventDefault();
    }
    
    function Leave() {
        console.log('drag leave');
    }
    
    function Drop() {
        let hajoNameWithLastId = vonszoltHajo.lastChild.id;
        let hajoClass = hajoNameWithLastId.slice(0, -2);
        console.log(hajoClass);
        let lastHajoIndex = parseInt(hajoNameWithLastId.substr(-1));
        let hajoLastId = lastHajoIndex + parseInt(this.dataset.id);
        console.log(hajoLastId);
        
        const notAllowedHorizontal = [0,10,20,30,40,50,60,70,80,90,1,11,21,31,41,51,61,71,81,91,2,22,32,42,52,62,72,82,92,3,13,23,33,43,53,63,73,83,93];
        const notAllowedVertical = [99,98,97,96,95,94,93,92,91,90,89,88,87,86,85,84,83,82,81,80,79,78,77,76,75,74,73,72,71,70,69,68,67,66,65,64,63,62,61,60];
        
        let newNotAllowedHorizontal = notAllowedHorizontal.splice(0, 10 * lastHajoIndex);
        let newNotAllowedVertical = notAllowedVertical.splice(0, 10 * lastHajoIndex);
        
        selectedHajoIndex = parseInt(kivalasztottHajoNevenekIndexe.substr(-1));
        
        hajoLastId = hajoLastId - selectedHajoIndex;
        console.log(hajoLastId);
        
        if (isHorizontal && !newNotAllowedHorizontal.includes(hajoLastId)) { 
            for(let i = 0; i < vonszoltHajoLength; i++) {
                let directionClass;
                if (i === 0) directionClass = 'start';
                if (i === vonszoltHajoLength - 1) directionClass = 'end';
                felhasznaloiTabla[parseInt(this.dataset.id) - selectedHajoIndex + i].classList.add('taken', 'horizontal', directionClass, hajoClass);
            }
        } else if (!isHorizontal && !newNotAllowedVertical.includes(hajoLastId)) {
            for (let i = 0; i < vonszoltHajoLength; i++) {
                let directionClass;
                if (i === 0) directionClass = 'start';
                if (i === vonszoltHajoLength - 1) directionClass = 'end';
                felhasznaloiTabla[parseInt(this.dataset.id) - selectedHajoIndex + width*i].classList.add('taken', 'vertical', directionClass, hajoClass);
            }
        } else return;
        
        hajokTabla.removeChild(vonszoltHajo);
        if (!hajokTabla.querySelector('.hajo')) osszesHajoFelhelyezese = true;
    }
    
    function End() {
       console.log('dragend');
    }
    
    //gamelogic
    function jatekMenet() {
        if(jatekVege) return;
        if (Jatekos === 'felhasznalo') {
            turnDisplay.innerHTML = 'Te következel!';
            szamitogepTabla.forEach(square => square.addEventListener('click', function() {
                negyzetMegjelenites(square);
            }));
        }
        if (Jatekos ==='ellenfel') {
            turnDisplay.innerHTML = 'Az ellenfél következik!';
            setTimeout (computerGo, 1000);
        }
    }
    startButton.addEventListener('click', jatekMenet);
    
    let RomboloCount = 0;
    let TengeralattjaroCount = 0;
    let CirkaloCount = 0;
    let CsatahajoCount = 0;
    let SzallitohajoCount = 0;
    
    
    function negyzetMegjelenites(square) {
        if (!square.classList.contains('boom')){
            if (square.classList.contains('Rombolo')) RomboloCount++;
            if (square.classList.contains('Tengeralattjaro')) TengeralattjaroCount++;
            if (square.classList.contains('Cirkalo')) CirkaloCount++;
            if (square.classList.contains('Csatahajo')) CsatahajoCount++;
            if (square.classList.contains('Szallitohajo')) SzallitohajoCount++;
        }
        if (square.classList.contains('taken')) {
            square.classList.add('boom');
        } else {
            square.classList.add('miss');
        }
        checkForWins();
        Jatekos = 'ellenfel';
        jatekMenet();
    }
    let cpuRomboloCount = 0;
    let cpuTengeralattjaroCount = 0;
    let cpuCirkaloCount = 0;
    let cpuCsatahajoCount = 0;
    let cpuSzallitohajoCount = 0;
    
    function computerGo() {
        let random = Math.floor(Math.random() * felhasznaloiTabla.length);
        if (!felhasznaloiTabla[random].classList.contains('boom')) {
            felhasznaloiTabla[random].classList.add('boom');
            if (felhasznaloiTabla[random].classList.contains('Rombolo')) cpuRomboloCount++;
            if (felhasznaloiTabla[random].classList.contains('Tengeralattjaro')) cpuTengeralattjaroCount++;
            if (felhasznaloiTabla[random].classList.contains('Cirkalo')) cpuCirkaloCount++;
            if (felhasznaloiTabla[random].classList.contains('Csatahajo')) cpuCsatahajoCount++;
            if (felhasznaloiTabla[random].classList.contains('Szallitohajo')) cpuSzallitohajoCount++;
        } else computerGo();
        Jatekos = 'felhasznalo';
        turnDisplay.innerHTML = 'Te következel!';
    }
    
    function checkForWins(){
        if (RomboloCount === 2) {
            infoDisplay.innerHTML = 'Elsüllyesztetted az ellenfél hajóját: Romboló';
            RomboloCount = 10;
        }
        if (TengeralattjaroCount === 3) {
            infoDisplay.innerHTML = 'Elsüllyesztetted az ellenfél hajóját: Tengeralattjáró';
            TengeralattjaroCount = 10;
        }
        if (CirkaloCount === 3) {
            infoDisplay.innerHTML = 'Elsüllyesztetted az ellenfél hajóját: Cirkáló';
            CirkaloCount = 10;
        }
        if (CsatahajoCount === 4) {
            infoDisplay.innerHTML = 'Elsüllyesztetted az ellenfél hajóját: Csatahajó';
            CsatahajoCount = 10;
        }
        if (SzallitohajoCount === 5) {
            infoDisplay.innerHTML = 'Elsüllyesztetted az ellenfél hajóját: Szállítóhajó';
            SzallitohajoCount = 10;
        }
        
        
        
        if (cpuRomboloCount === 2) {
            infoDisplay3.innerHTML = 'Az ellenfél elsüllyesztette a hajódat: Romboló';
            cpuRomboloCount = 10;
        }
        if (cpuTengeralattjaroCount === 3) {
            infoDisplay3.innerHTML = 'Az ellenfél elsüllyesztette a hajódat: Tengeralattjáró';
            cpuTengeralattjaroCount = 10;
        }
        if (cpuCirkaloCount === 3) {
            infoDisplay3.innerHTML = 'Az ellenfél elsüllyesztette a hajódat: Cirkáló';
            cpuCirkaloCount = 10;
        }
        if (cpuCsatahajoCount === 4) {
            infoDisplay3.innerHTML = 'Az ellenfél elsüllyesztette a hajódat: Csatahajó';
            cpuCsatahajoCount = 10;
        }
        if (cpuSzallitohajoCount === 5) {
            infoDisplay3.innerHTML = 'Az ellenfél elsüllyesztette a hajódat: Szállítóhajó';
            cpuSzallitohajoCount = 10;
        }
        if ((RomboloCount + TengeralattjaroCount + CirkaloCount + CsatahajoCount + SzallitohajoCount) === 50) {
            infoDisplay2.innerHTML = "Győzelem!";
            gameOver();
        }
        if ((cpuRomboloCount + cpuTengeralattjaroCount + cpuCirkaloCount + cpuCsatahajoCount + cpuSzallitohajoCount) === 50) {
            infoDisplay2.innerHTML = "Vesztettél!";
            gameOver();
            
        }
        
        function gameOver() {
            jatekVege = true;
            startButton.removeEventListener('click', jatekMenet);
        }
    }
    
});