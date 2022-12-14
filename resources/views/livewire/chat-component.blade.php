<div class="wrapper" id="wrapper">
    <div class="wrap">
        <div class="iconChat" id="iconChat1" onclick="openHelp()">
            <div class="textChat" id="textChat1">
            <span>Help</span>
            </div>
            <i class="bi bi-question-lg"></i>
        </div>
        <div class="iconChat" id="iconChat2" onclick="openChat()">
            <div class="textChat" id="textChat2">
            <span>Chat</span>
            </div>
            <i class="bi bi-chat-dots" id="support"></i>
        </div>
        <div class="animation start q" id="animation"></div>
    </div>
    <div class="helpWrapper" id="helpContainer">
        <div class="head">
            <span>ข้อมูลติดต่อกลับ</span>
            <i class="bi bi-x" onclick="openHelp()"></i>
        </div>
        <form class="contact-back-form">
            <p>
            <span>ชื่อ :</span>
            <input type="text" name="name" id="name" />
            </p>
            <p>
            <span>เบอร์ :</span>
            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" id="phone" />
            </p>
            <button onclick="openHelp()">Submit</button>
        </form>
    </div>
    <div class="chatWrapper" id="chatContainer">
        <div class="head">
            <span>คุณต้องการติดต่อเรื่องใด ?</span>
            <i class="bi bi-x" onclick="openChat()"></i>
        </div>
        <div class="chat-choices" id="chatChoice">
            <button class="chat-choice" onclick="openChatBox('การเคลม')">การเคลม</button>
            <button class="chat-choice" onclick="openChatBox('support ทางเทคนิค')">support ทางเทคนิค</button>
            <button class="chat-choice" onclick="openChatBox('ใบเสนอราคา')">ใบเสนอราคา</button>
        </div>
    </div>
    <div class="chatboxWrapper" id="chatboxContainer">
        <div class="head">
            <span id="chatHead"></span>
            <i class="bi bi-x" onclick="openChat()"></i>
        </div>
        <div class="chatbox">
            <div style="padding: 10px;">
                <div class="d-flex align-items-baseline justify-content-end">
                    <div>
                        <div class="card d-inline-block p-1 px-3 m-1">Hello</div>
                        <div class="small text-end" style="font-size: 10px">01.19 AM</div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline justify-content-start">
                    <div class="position-relative avatar" style="padding: 0 3px;">
                        <i class="bi bi-robot"></i>
                    </div>
                    <div>
                        <div class="card d-inline-block p-1 px-3 m-1">Hello sir,</div>
                        <div class="card d-inline-block p-1 px-3 m-1">May I help you ?</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-textChat">
            <input type="text" id="inputTextChat" />
            <button onclick="sendTextChat()">Send</button>
        </div>
    </div>
</div>

<style>

.wrapper {
    position: fixed;
    bottom: 0;
    right: 0;
    margin: 0 20px 20px 0;
    background: white;
    width: 70px;
    height: 140px;
    border-radius: 35px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    z-index: 100;
}

.wrap {
    position: absolute;
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 140px;
    justify-content: space-evenly;
    align-items: center;
}

.iconChat {
    cursor: pointer;
    z-index: 300;
    position: relative;
    margin: 8px 0;
    width: 50px;
    height: 50px;
    font-size: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 25px;
    transition: all ease 200ms;
}

.iconChat .textChat {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    background-color: #000000;
    font-size: 20px;
    color: white;
    position: absolute;
    opacity: 0;
    left: -70px;
    padding: 7px 10px;
    border-radius: 5px;
    transition: all ease 300ms;
    box-shadow: 0px 4px 0px 0px rgba(58, 58, 58, 0.75);
    z-index: 300;
    pointer-events: none;
    user-select: none;
}

.iconChat:hover .textChat {
    opacity: 1;
    transform: translateX(-15px);
}

.animation {
    position: absolute;
    top: 0;
    margin: 10px 0;
    border-radius: 25px;
    width: 50px;
    height: 50px;
    transition: all ease 200ms;
    background-color: #f53b57;
}

.chatWrapper, .helpWrapper, .chatboxWrapper {
    display: none;
    z-index: 200;
    width: 300px;
    min-height: 200px;
    border-radius: 20px;
    position: fixed;
    background: white;
    right: 100px;
    bottom: 20px;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.helpWrapper .contact-back-form {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 0.8rem 1rem;
    font-size: 16px;
}


.helpWrapper .contact-back-form p:nth-child(2)  {
    margin-top: 0.5rem;
}

.helpWrapper .contact-back-form input {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.helpWrapper .contact-back-form button {
    height: 42px;
    width: 100%;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 15px 0 8px 0;
    cursor: pointer;
    transition: all 0.2s linear;
    border: 2px solid black;
    background-color: black;
    color: white;
}

.helpWrapper .contact-back-form button:hover {
    background-color: white;
    color: black;
}

.helpWrapper .contact-back-form button:active {
    background-color: rgb(211, 211, 211); 
}

.chatWrapper {
    min-height: 250px;
}

.chatWrapper .chat-choices {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    min-height: calc(189px);
    padding: 1rem;
}

.chatWrapper .chat-choices .chat-choice {
    cursor: pointer;
    height: 44px;
    width: 100%;
    font-size: 16px;
    border-radius: 10px;
    background-color: white;
    border: 1px solid rgb(155, 154, 154);
    transition: all 0.2s ease;
}

.chatWrapper .chat-choices .chat-choice:hover {
    background: rgb(52, 77, 219);
    color: white;
}

.chatWrapper .chat-choices .chat-choice:active {
    background: rgb(105, 125, 233);
    color: white;
}

.chatboxWrapper .chatbox {
    height: 290px;
    overflow-y: auto;
}

.chatboxWrapper .input-textChat {
    border-top: 0.5px solid rgb(204, 204, 204);
    border-radius: 0 0 20px 20px;
    background-color: rgb(42, 42, 42);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0.6rem;
}

.chatboxWrapper .input-textChat input {
    border: 0.5px solid rgb(204, 204, 204);
    border-radius: 5px 5px 5px 20px ;
    margin-right: 0.5rem;
    width: 75%;
    padding: 0.375rem;
    height: min-content;
}

.chatboxWrapper .input-textChat button {
    min-width: fit-content;
    padding: 0.375rem;
    border-radius: 5px;
    background-color: white;
    border: 2px solid black;
    cursor: pointer;
}

.chatboxWrapper .input-textChat button:hover {
    background-color: black;
    color: white;
    border: 2px solid white;
}

.chatboxWrapper .input-textChat button:active {
    background-color: rgb(51, 50, 50);
}

.chatWrapper .head,
.helpWrapper .head,
.chatboxWrapper .head {
    font-size: 20px;
    padding: 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 0.5px solid rgb(204, 204, 204);
    transition: all 0.2s ease;
}

.chatWrapper .head i:hover,
.helpWrapper .head i:hover,
.chatboxWrapper .head i:hover {
    cursor: pointer;
    color: red;
}
</style>

<script>
    const helpContainer = document.getElementById("helpContainer");
    const chatContainer = document.getElementById("chatContainer");
    const chatChoice = document.getElementById("chatChoice");
    const chatboxContainer = document.getElementById("chatboxContainer");
    const wrapper = document.getElementById("wrapper");
    let isHelpOpen = false;
    let isChatOpen = false;
    let isChatChoice = true;
    document.addEventListener("click", (event) => {
    const isClickInside = wrapper.contains(event.target);

    if (!isClickInside) {
        isChatOpen = false;
        isHelpOpen = false;
        isChatChoice = true;
        helpContainer.style.display = "none";
        chatContainer.style.display = "none";
    }
    });
    
    const openHelp = () => {
    isChatChoice = true;
    isChatOpen = false;
    chatContainer.style.display = "none";
    chatboxContainer.style.display = "none";
    if (isHelpOpen === true) {
        helpContainer.style.display = "none";
        isHelpOpen = false;
    } else {
        isHelpOpen = true;
        helpContainer.style.display = "block";
    }
    };

    const openChat = () => {
    isChatChoice = true;
    isHelpOpen = false;
    helpContainer.style.display = "none";
    chatboxContainer.style.display = "none";
    if (isChatOpen === true) {
        isChatOpen = false;
        chatContainer.style.display = "none";
    } else {
        isChatOpen = true;
        chatContainer.style.display = "block";
    }
    };
    
    const openChatBox = (textChat) => {
    document.getElementById('chatHead').innerHTML = textChat;
    isChatChoice = false;
    chatContainer.style.display = "none";
    chatboxContainer.style.display = "block";
    }
    const iconChat1 = document.getElementById("iconChat1");
    const iconChat2 = document.getElementById("iconChat2");
    const animation = document.getElementById("animation");
    const textChat1 = document.getElementById("textChat1");
    const textChat2 = document.getElementById("textChat2");
    const support = document.getElementById("support");
    iconChat1.onmouseover = () => {
    animation.style.top = "0px";
    animation.style.background = "#f53b57";
    support.style.color = "black";
    };
    iconChat2.onmouseover = () => {
    animation.style.top = "70px";
    animation.style.background = "skyblue";
    support.style.color = "white";
    };
</script>


