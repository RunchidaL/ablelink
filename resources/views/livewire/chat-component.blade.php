<div class="container">
    <div class="container mt-3 shadow-sm" id="myForm" style="max-width: 420px; height: auto; background-color: #fff; border-radius: 25px; border: 1px solid rgb(233, 233, 233); display: none; position: fixed; right: 125px; bottom: 25px;">
        <br><button type="button" style="border: 1px solid #fff; background: #fff; float: right;" onclick="closeForm()"><img src="static/images/cancel.png" style="width: 22px; height: 22px;"></button>
        <h5 style="padding:5px; margin-left: 17px; margin-top: 7px; font-size: 23px;">What are you inquiring about?</h5>
        <div class="btn-group-vertical" style="position: flex; padding: 7px; display: block;">
            <button type="button" onclick="myChatT()" class="btn btn-outline-dark" style="font-size: 18px; padding: 10px; margin-bottom: 10px; border-radius: 10px 10px 0 0;">การเคลม</button>
            <button type="button" onclick="myChatS()"class="btn btn-outline-dark" style="font-size: 18px; padding: 10px; margin-bottom: 10px;">Support ทางเทคนิค</button>
            <button type="button" onclick="myChatTx()"class="btn btn-outline-dark" style="font-size: 18px; padding: 10px; border-radius: 0 0 10px 10px; margin-bottom: 13px;">ใบเสนอราคา</button>
        </div>
    </div>
    <div class="chat-box shadow-sm" id="chatTechnical" style="display: none; left: 920px; top: 250px;">
        <div class="client">
            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 45px; height: 45px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                <div class="text" style="margin-left: 8px; width: 100%;">
                    <h2 style="font-size: 20px; margin-top: 5px;">การเคลม</h2>
                </div>
                <button type="button" style="border: 1px solid #fff; background: #fff; float: right;" onclick="closeChatT()"><img src="static/images/cancel.png" style="width: 22px; height: 22px;"></button>
        </div>
        <div class="chats">
            <div class="client-chat">
                    
                    <div class="d-flex align-items-baseline text-end justify-content-end" style="margin-top: 13px; ">
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div>
                                <div class="card card-text-client d-inline-block p-2 px-3 m-1">Hello</div>
                            </div>
                            <div>
                                <div class="small" style="margin-right: 5px;">01.19 AM</div>
                            </div>
                        </div>
                        <div class="position-relative avatar" style="margin-right: 17px;">
                            <img src="static/images/user.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="admin profile">
                        </div>
                    </div>
                    <div class="d-flex align-items-baseline mb-4">
                        <div class="position-relative avatar" style="margin-left: 17px;">
                            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                        </div>
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">Hello sir,</div></div>
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">May I help you ?</div></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Write a message...">
            <button class="send-btn">
                <img src="static/images/send.png" alt="send-btn">
            </button>
        </div>
    </div>
    <div class="chat-box shadow-sm" id="chatSales" style="display: none; left: 920px; top: 250px;">
        <div class="client">
            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 45px; height: 45px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                <div class="text" style="margin-left: 8px; width: 100%;">
                    <h2 style="font-size: 20px; margin-top: 5px;">Support ทางเทคนิค</h2>
                </div>
                <button type="button" style="border: 1px solid #fff; background: #fff; float: right;" onclick="closeChatS()"><img src="static/images/cancel.png" style="width: 22px; height: 22px;"></button>
        </div>
        <div class="chats">
            <div class="client-chat">
                    
                    <div class="d-flex align-items-baseline text-end justify-content-end" style="margin-top: 13px; ">
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div>
                                <div class="card card-text-client d-inline-block p-2 px-3 m-1">Hello</div>
                            </div>
                            <div>
                                <div class="small" style="margin-right: 5px;">01.19 AM</div>
                            </div>
                        </div>
                        <div class="position-relative avatar" style="margin-right: 17px;">
                            <img src="static/images/user.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="admin profile">
                        </div>
                    </div>
                        <div class="d-flex align-items-baseline mb-4">
                        <div class="position-relative avatar" style="margin-left: 17px;">
                            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                        </div>
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">Hello sir,</div></div>
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">May I help you ?</div></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Write a message...">
            <button class="send-btn">
                <img src="static/images/send.png" alt="send-btn">
            </button>
        </div>
    </div>
    <div class="chat-box shadow-sm" id="chatTax" style="display: none; left: 920px; top: 250px;">
        <div class="client">
            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 45px; height: 45px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                <div class="text" style="margin-left: 8px; width: 100%;">
                    <h2 style="font-size: 20px; margin-top: 5px;">ใบเสนอราคา</h2>
                </div>
                <button type="button" style="border: 1px solid #fff; background: #fff; float: right;" onclick="closeChatTx()"><img src="static/images/cancel.png" style="width: 22px; height: 22px;"></button>
        </div>
        <div class="chats">
            <div class="client-chat">
                    
                    <div class="d-flex align-items-baseline text-end justify-content-end" style="margin-top: 13px; ">
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div>
                                <div class="card card-text-client d-inline-block p-2 px-3 m-1">Hello</div>
                            </div>
                            <div>
                                <div class="small" style="margin-right: 5px;">01.19 AM</div>
                            </div>
                        </div>
                        <div class="position-relative avatar" style="margin-right: 17px;">
                            <img src="static/images/user.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="admin profile">
                        </div>
                    </div>
                        <div class="d-flex align-items-baseline mb-4">
                        <div class="position-relative avatar" style="margin-left: 17px;">
                            <img src="static/images/admin.png" class="img-fluid rounded-circle" style="width: 40px; height: 40px; border-radius: 50%; border: 2px solid red; padding: 1px;" alt="user profile">
                        </div>
                        <div class="pe-2" style="margin-top: 13px; margin-left: 10px;">
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">Hello sir,</div></div>
                            <div><div class="card card-text-admin d-inline-block p-2 px-3 m-1">May I help you ?</div></div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="chat-input">
            <input type="text" placeholder="Write a message...">
            <button class="send-btn">
                <img src="static/images/send.png" alt="send-btn">
            </button>
        </div>
    </div>
</div>
<div class="container mt-3 shadow-sm" id="myContact" style="max-width: 350px; height: auto; background-color: #fff; border-radius: 25px; border: 1px solid rgb(233, 233, 233); display: none; position: fixed; right: 125px; bottom: 25px;">
    <br><button type="button" style="border: 1px solid #fff; background: #fff; float: right;" onclick="closeContact()"><img src="static/images/cancel.png" style="width: 22px; height: 22px;"></button>
    <h5 style="margin-left: 17px; margin-top: 7px; font-size: 23px;">Contact call back</h5>
    <form class="Contact">
        <div class="mt-3" style="margin-left: 15px; margin-bottom: 15px;">
            <b><div class="small" style="font-size: 17px;">Name :</div>
            <input type="text" placeholder=" Name" name="name" style="width: 290px; height:40px; border: 1px solid rgb(174, 174, 174); border-radius: 8px; font-size: 17px; padding: 3px; margin-bottom: 7px;">
            <b><div class="small" style="font-size: 17px;">Tel :</div>
            <input type="tel" placeholder=" 0X-XXXX-XXXX" name="tel" style="width: 290px; height:40px; border: 1px solid rgb(174, 174, 174); border-radius: 8px; font-size: 17px; padding: 3px;">

        </div>
        <button type="button" class="btn btn-outline-dark" style="width:90px; font-size: 17px; padding: 5px; border-radius: 10px 10px 10px 10px; margin-bottom: 15px; margin-left: 220px;">Submit</button>
    </form>
</div>
<div class="navigation">
    <ul>
        <li class="list active">
            <a href="#">
                <span class="icon"><button class="btn" onclick="openContact()"><i class="fa-solid fa-circle-question"></i></button></span>
                <span class="title">Help</span>
            </a>
        </li>
        <li class="list">
            <a>
                <span class="icon"><button class="btn" onclick="openForm()"><i class="fa-solid fa-headset"></i></button></span>
                <span class="title">Chat</span>
            </a>
        </li>
        <div class="indicator"></div>
    </ul>
</div>

<style>
.navigation {
    position: relative;
    width: 70px;
    height: 170px;
    background: #fff;
    border-radius: 35px;
    box-shadow: 0 15px 25px rgba(0,0,0,0.1);
    position: fixed;
    right: 30px;
    bottom: 25px;

}
.navigation ul {
    position: absolute;
    top: 37px;
    left: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
}
.navigation ul li {
    position: relative;
    list-style: none;
    width: 70px;
    height: 75px;
    z-index: 1;
}
.navigation ul li a {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 12%;
    text-align: center;
    color: #333;
    font-weight: 500;
    cursor: pointer;
}
.navigation ul li a .icon .btn {
    position: relative;
    display: block;
    line-height: 25px;
    text-align: center;
    transition: 0.3s;

}
.navigation ul li.active a .icon .btn{
    color: #fff;
}
.navigation ul li a .icon .btn i {
    font-size: 27px;
}

.navigation ul li a .title {
    position: absolute;
    top: 50%;
    right: 50px;
    color: #fff;
    background: #2f2f2f;
    transform: translateY(-50%);
    padding: 10px 13px;
    border-radius: 6px;
    transition: 0.5s;
    box-shadow: 0.5px 8px rgba(0,0,0,0.1);
    opacity: 0;
    visibility: hidden;
}
.navigation ul li:hover a .title {
    opacity: 1;
    visibility: visible;
    transform: translateX(-25px) translateY(-50%);
}
.navigation ul .indicator {
    position: absolute;
    left: 0;
    width: 70px;
    height: 70px;
    transition: 0.3s;
}
.navigation ul .indicator::before {
    content: '';
    position: absolute;
    bottom: 26px;
    left: 13px; 
    width: 47px;
    height: 47px;
    background: #333;
    border-radius: 50%; 
    transition: 0.3s;
}
.navigation ul li:nth-child(1).active ~ .indicator {
    transform: translateY(calc(78px * 0));
}
.navigation ul li:nth-child(2).active ~ .indicator {
    transform: translateY(calc(76px * 1));
}
.navigation ul li:nth-child(1).active ~ .indicator::before {
    background: #f53b57;
}
.navigation ul li:nth-child(2).active ~ .indicator::before {
   background: #0fbcf9;
}
.chat-box {
    max-width: 370px;
    height: 470px;
    background-color: #fff;
    border-radius: 25px;
    border: 1px solid rgb(233, 233, 233);
    overflow: hidden;
    position: relative;
}
.client {
    display: flex;
    justify-content: start;
    align-items: center;
    height: 80px;
    padding: 15px;
    background: #fff;
}
.chats {
    background: #eee;
    height: 330px;
}
.card-text-admin {
    border: 2px solid #ddd;
    border-radius: 10px 10px 10px 0;
}
.card-text-client {
    border: 2px solid #ddd;
    border-radius: 10px  10px 0 10px;
}
.chat-input {
    display: flex;
    align-items: center;
    width: 100%;
    height: 65px;
    background-color: #fff;
    padding: 15px;
    overflow: hidden;
    position: absolute;
    bottom: 0;
}
.chat-input input {
    width: calc(100% - 40px);
    height: 100%;
    background-color: #4f5d7321;
    border-radius: 50px;
    border: 1px solid #fff;
    font-size: 15px;
    padding: 0 15px;
}

.send-btn {
    width: 50px;
    height: 40px;
    background-color: transparent;
    border: 1px solid #fff;
    overflow: hidden;
    position: relative;
    border-radius: 50%;
    margin-left: 5px;
    cursor: pointer;
    transition: 0.4s ease-in-out;
}
.send-btn:active {
    transform: scale(0.85);
}
.send-btn img {
    color: #fff;
    width: 100%;
    height: 100%;
}
.open-popup {
    visibility: visible;
    top: 477px;
    transform: translate(-1%,-50%) scale(1);
}
</style>

<script>
    let list = document.querySelectorAll('li');
    for(let i=0; i<list.length; i++) {
        list[i].onmouseover = function(){
            let j=0;
            while (j < list.length) {
                list[j++].className = 'list';
            }
            list[i].className = 'list active';
        }
    }
</script>
<script>
    function myChatT() {
        var x = document.getElementById("chatTechnical");
        var menu = document.getElementById("myForm");
        if(x.style.display === "none") {
            menu.style.display = "none";
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
    function myChatS() {
        var x = document.getElementById("chatSales");
        var menu = document.getElementById("myForm");
        if(x.style.display === "none") {
            menu.style.display = "none";
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
    function myChatTx() {
        var x = document.getElementById("chatTax");
        var menu = document.getElementById("myForm");
        if(x.style.display === "none") {
            menu.style.display = "none";
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
    function closeChatT() {
        document.getElementById("chatTechnical").style.display = "none";
    }
    function closeChatS() {
        document.getElementById("chatSales").style.display = "none";
    }
    function closeChatTx() {
        document.getElementById("chatTax").style.display = "none";
    }
    function openContact() {
        document.getElementById("myContact").style.display = "block";
        document.getElementById("myForm").style.display = "none";
    }
    function closeContact() {
        document.getElementById("myContact").style.display = "none";
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("myContact").style.display = "none";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
