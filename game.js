play();
//endlevel questions and answers
let gameScore=0;
let currentQ=0;
let q1="Womit kann Cody entscheiden ob er Eukalyptus oder Mangos essen will? (Verzweigungen oder Schleifen?)";
let q2="Wie kann Cody sich große Zahlen und lange Wörter einfach merken? (Output oder Variablen?)";
let q3="Was kann Cody benutzen um Compi zu sagen das er alle Mangos schälen soll (ohne jede einzeln aufzuzählen)? (Variablen oder Schleifen?)";
let q4="Wie redet Cody mit Compi und wie kann Compi antworten? (Eingabe/Ausgabe oder Mikrofon?)";
let q5="Wenn Cody sich das Wetter anschaut, wie kann er entscheiden ob er in sein Baumhaus gehen muss oder ob er draußen bleiben kann? (Schleifen oder Verzweigungen?)";
let q6="Womit kann Cody Compi sagen das er jede Stunde die Zeit ausgeben soll? (Variablen oder Schleifen?)";

let a1="Verzweigungen";
let a2="Variablen";
let a3="Schleifen";
let a4="Eingabe/Ausgabe";
let a5="Verzweigungen";
let a6="Schleifen";

function play(){
    console.log("PLAY START");
    let gameLVL=document.getElementById("level").value;
    let gameZone=document.getElementById("gameElements");

    let gameWindow=document.createElement("img");
    gameWindow.className="center";

    let inputInfo=document.createElement("p");
    inputInfo.innerHTML="Eingabe";
    inputInfo.className="center";
    let inputWindow=document.createElement("input");
    inputWindow.id="inputID";
    inputWindow.className="center";

    let outputInfo=document.createElement("p");
    outputInfo.innerHTML="Ausgabe";
    outputInfo.className="center";
    let outputWindow=document.createElement("input");
    outputWindow.disabled=true;
    outputWindow.id="outputID";
    outputWindow.className="center";

    let but=document.createElement("button");
    but.id="myButton";
    but.className="btn btn-warning center";
    but.style="margin-top: 20px; text-align: center; width: 270px";
    but.innerHTML="Überprüfen";



    gameZone.innerHTML="";
    gameZone.appendChild(gameWindow);
    gameZone.appendChild(inputInfo);
    gameZone.appendChild(inputWindow);
    gameZone.appendChild(outputInfo);
    gameZone.appendChild(outputWindow);
    gameZone.appendChild(but);

    if(gameLVL==0){ //introLevel
        gameWindow.src="level0.jpeg";
        outputWindow.value="Hallo Cody!";
        but.onclick=check0;

    }else if(gameLVL==1){ //input/outputLevel
        gameWindow.src="level1.jpeg";
        but.onclick=check1;

    }else if(gameLVL==2){ // variables
        gameWindow.src="level2.jpeg";
        let number=Math.floor(Math.random() * 9999);       //number can be 0-9998
        let numberString=number.toString();
        document.getElementById("outputID").value=numberString;
        but.onclick=check2;

    }else if(gameLVL==3){ //Verzweigungen
        gameWindow.src="level3.jpeg";
        let number=Math.floor(Math.random() * 100);       //number can be 0-99
        let modNumber=number%2;
        let hungry = false;
        if (modNumber==0){
         hungry=true;
        }
        if(hungry){
            document.getElementById("outputID").value="Ich bin hungrig!";
        }else{
            document.getElementById("outputID").value="Ich bin satt!";
        }
        but.onclick=check3;

    }else if(gameLVL==4){ //Schleifen

        let mCHolder=document.createElement("input");
        mCHolder.type="hidden";
        mCHolder.id="mangoID";
        mCHolder.name="mangoID";

        gameWindow.src="level4.jpeg";
        let mangoCounter=((Math.floor(Math.random() * 5))+1); //number can be 1-5
        let mangoSrc="mango.jpeg"
        mCHolder.value=mangoCounter.toString();
        gameZone.appendChild(mCHolder);
        for (let i = 0; i < mangoCounter; i++) {
            //append Mangos
            let mango=document.createElement("img");
            mango.src=mangoSrc;
            mango.className="centerMango";
            gameZone.appendChild(mango);
        }
        but.onclick=check4;
    }else{ //endLevel
        if(gameScore!=5){
            gameWindow.src="level5.jpeg";
            let number=Math.floor(Math.random() * 6)+1;       //number can be 1-6

            let area=document.createElement("p");
            area.innerHTML="";
            area.className="successA center";
            gameZone.appendChild(area);




            if(number==1){
                area.innerHTML=q1;
                currentQ=1;
                gameZone.appendChild(area);
            }else if (number==2){
                area.innerHTML=q2;
                currentQ=2;
                gameZone.appendChild(area);
            }else if (number==3){
                area.innerHTML=q3;
                currentQ=3;
                gameZone.appendChild(area);
            }else if (number==4){
                area.innerHTML=q4;
                currentQ=4;
                gameZone.appendChild(area);
            }else if (number==5){
                area.innerHTML=q5;
                currentQ=5;
                gameZone.appendChild(area);
            }else{
                area.innerHTML=q6;
                currentQ=6;
                gameZone.appendChild(area);
            }
            but.onclick=check5;
        }else{
            gameWindow.src="win.jpeg";
        }
    }
}

function check0(){
    let input=document.getElementById("inputID").value;
    let answer=document.getElementById("outputID").value;
    let info=document.createElement("p");
    info.innerHTML="Gut gemacht!";
    info.className="successA center";
    if(input==answer){
        let gameZone=document.getElementById("gameElements");
        gameZone.appendChild(info);
        document.getElementById("level").value=1;
        setTimeout(play,5000);
    }else{
        alert("Leider Falsch! Versuche es nochmal!");
    }
}

function check1(){
    let input=document.getElementById("inputID").value;
    let output="";
    if(input!=""){
        output="Hallo! Ich bin "+input+"!";
        let outputField=document.getElementById("outputID");
        outputField.value = output;
        let info=document.createElement("p");
        info.innerHTML="Gut gemacht!";
        info.className="successA center";
        let gameZone=document.getElementById("gameElements");
        gameZone.appendChild(info);
        document.getElementById("level").value=2;
        setTimeout(play,5000);
    }else{
        alert("Bitte gib einen Namen ein!");
    }
}

function check2(){
    let output=document.getElementById("outputID").value.toString();
    let input=document.getElementById("inputID").value.toString();
    let outputString="a="+output;
    if(input==outputString){
        let info=document.createElement("p");
        info.innerHTML="Gut gemacht!";
        info.className="successA center";
        let gameZone=document.getElementById("gameElements");
        gameZone.appendChild(info);
        document.getElementById("level").value=3;
        setTimeout(play,5000);
    }else{
        alert("Falsch! Versuche es in der form a=die Zahl aus dem Ausgabefeld!");
    }
}

function check3(){
    let output=document.getElementById("outputID").value.toString();
    let input=document.getElementById("inputID").value.toString();
    if(output=="Ich bin hungrig!"){
        if(input=="ja"){
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            document.getElementById("level").value=4;
            setTimeout(play,5000);
        }else{
            alert("Falsch! Versuche es mit -ja- (falls er hungrig ist) oder mit -nein-!");
        }
    }else{
        if(input=="nein"){
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            document.getElementById("level").value=4;
            setTimeout(play,5000);
        }else{
            alert("Falsch! Versuche es mit -ja- (falls er hungrig ist) oder mit -nein-!");
        }
    }
}

function check4(){
    let mangoCString=document.getElementById("mangoID").value.toString();
    let input=document.getElementById("inputID").value.toString();
    if(input==mangoCString){
        let info=document.createElement("p");
        info.innerHTML="Gut gemacht!";
        info.className="successA center";
        let gameZone=document.getElementById("gameElements");
        gameZone.appendChild(info);
        document.getElementById("level").value=5;
        setTimeout(play,5000);
    }else{
        alert("Falsch! Das ist nicht die richtige Anzahl an Mangos!");
    }
}

function check5(){
    let input=document.getElementById("inputID").value;
    if(currentQ==1){
        if (input==a1){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }
    }else if (currentQ==2){
        if (input==a2){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }

    }else if (currentQ==3){
        if (input==a3){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }

    }else if (currentQ==4){
        if (input==a4){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }

    }else if (currentQ==5){
        if (input==a5){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }

    }else{
        if (input==a6){
            gameScore++;
            let info=document.createElement("p");
            info.innerHTML="Gut gemacht!";
            info.className="successA center";
            let gameZone=document.getElementById("gameElements");
            gameZone.appendChild(info);
            setTimeout(play,5000);
        }else{
            alert("Leider Falsch! Versuche es nochmal!");
        }
    }
}