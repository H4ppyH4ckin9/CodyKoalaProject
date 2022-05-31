play();

function play(){
    console.log("PLAY START");
    let gameLVL=document.getElementById("level").value;
    let gameZone=document.getElementById("gameElements");

    let gameWindow=document.createElement("img");

    let inputInfo=document.createElement("p");
    inputInfo.innerHTML="Eingabe";
    let inputWindow=document.createElement("input");
    inputWindow.id="inputID";

    let outputInfo=document.createElement("p");
    outputInfo.innerHTML="Ausgabe";
    let outputWindow=document.createElement("input");
    outputWindow.disabled=true;
    outputWindow.id="outputID";

    let but=document.createElement("button");
    but.id="myButton";
    but.className="btn btn-warning";
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


    }else if(gameLVL==4){ //Schleifen


    }else{ //endLevel


    }
}

function check0(){
    let input=document.getElementById("inputID").value;
    let answer=document.getElementById("outputID").value;
    let info=document.createElement("p");
    info.innerHTML="Gut gemacht!";
    info.className="successA";
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
        info.className="successA";
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
        info.className="successA";
        let gameZone=document.getElementById("gameElements");
        gameZone.appendChild(info);
        document.getElementById("level").value=3;
        setTimeout(play,5000);
    }else{
        alert("Falsch! Versuche es in der form a=die Zahl aus dem Ausgabefeld!");
    }
}