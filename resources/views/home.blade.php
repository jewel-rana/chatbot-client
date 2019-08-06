@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

      <div class="row chat_container" id="supportBox">
         <div class="col-sm-3 chat_sidebar">
         <div class="row">
            <div id="custom-search-input">
               <div class="input-group col-md-12">
                  <input type="text" class="  search-query form-control" placeholder="Conversation" />
                  <button class="btn btn-danger" type="button">
                  <span class=" glyphicon glyphicon-search"></span>
                  </button>
               </div>
            </div>
            <div class="dropdown all_conversation" style="width:100%">
               <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fa fa-weixin" aria-hidden="true"></i>
               All Conversations
               <!-- <span class="caret pull-right"></span> -->
               </button>
               <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><a href="#"> All Conversation </a>  <ul class="sub_menu_ list-unstyled">
                  <li><a href="#"> All Conversation </a> </li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
               </ul>
               </li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
               </ul> -->
            </div>
            <div class="member_list">
               <ul class="list-unstyled" id="member_list">
                  <!-- <li class="left clearfix">
                     <span class="chat-img pull-left">
                     <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body clearfix">
                        <div class="header_sec">
                           <strong class="primary-font">Jack Sparrow</strong> <strong class="pull-right">
                           09:45AM</strong>
                        </div>
                        <div class="contact_sec">
                           <strong class="primary-font">(123) 123-456</strong> <span class="badge pull-right">3</span>
                        </div>
                     </div>
                  </li> -->
                  <li class="left clearfix">
                    <p>No new message</p>
                  </li>
               </ul>
            </div></div>
         </div>
         <!--chat_sidebar-->
         
         
         <div class="col-sm-9 message_section">
         <div class="row">
         <div class="new_message_head">
         <div class="pull-left"><button><i class="fa fa-user" aria-hidden="true"></i> <span id="currentUserName">Common Group</span></button></div><div class="pull-right"><div class="dropdown">
  <!-- <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fa fa-cogs" aria-hidden="true"></i>  Setting
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Profile</a></li>
    <li><a href="#">Logout</a></li>
  </ul> -->
</div></div>
         </div><!--new_message_head-->
         
         <div class="chat_area">
         <ul class="list-unstyled" id="userChatMessages">
      <li><p>Please join to a chat</p></li>
         <!-- <li class="left clearfix">
                     <span class="chat-img1 pull-left">
                     <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        <div class="chat_time pull-right">09:40PM</div>
                     </div>
                  </li>
                  <li class="left clearfix admin_chat">
                     <span class="chat-img1 pull-right">
                     <img src="https://lh6.googleusercontent.com/-y-MY2satK-E/AAAAAAAAAAI/AAAAAAAAAJU/ER_hFddBheQ/photo.jpg" alt="User Avatar" class="img-circle">
                     </span>
                     <div class="chat-body1 clearfix">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
                        <div class="chat_time pull-left">09:40PM</div>
                     </div>
                  </li> -->
                  
                
         
         
         </ul>
         </div><!--chat_area-->
          <div class="message_write">
         <textarea class="form-control" placeholder="type a message" id="chatBoxTextarea"></textarea>
         <div class="clearfix"></div>
         <div class="chat_bottom"></div>
         </div>
         </div>
         </div> <!--message_section-->
      </div>
        </div>
    </div>
</div>

<!-- <div id="chat-wrapper">
    <div class="supportIcon" id="supportIcon" data-name="Support" data-id="0" data-userid="<?php echo Auth::user()->id; ?>">
        <i class="fa fa-comment" data-name="Support" data-id="<?php echo Auth::user()->id; ?>"></i>
    </div>
</div> -->

<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Live support</h4>
      </div>
      <div class="modal-body">
        <div id="supportChatMessages"></div>
      </div>
      <div class="modal-footer">
        <form id="supportMsgForm" method="post">
            <div class="input-group">
                <input type="text" name="msgText" class="form-control" placeholder="Write here...">
                <span class="input-group-btn">
                    <button class="btn btn-warning" type="submit">Send</button>
                </span>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--
/* Chat options
/* Chat box popup
-->
<!-- <div id="chat-wrapper">
    <div id="chat-lists" class="hide">
        <div class="chat-list-header">
            <h4>Online Users</h4>
        </div>
        <ul id="chat-users">
            <li class="chatboxopen">
                <a href="#">No online user</a>
            </li>
        </ul>   
    </div>
    <div class="chatFooter" id="chatFooter">
        <p><span id="onlineUserCount"></span> users online <span class="batch batch-info pull-right" id="pendingChatCount">0</span></p>
    </div>
</div> -->
<div class="popup-box chat-popup" id="qnimate">
    <div class="popup-head">
        <div class="popup-head-left pull-left">
            <img src="" alt="avtr" id="chatUserAvatar"> 
            <span id="chatUserName"></span>
        </div>
        <div class="popup-head-right pull-right">
            <span data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="fa fa-times"></i></span>
        </div>
    </div>
    <div class="popup-messages">

        <div class="direct-chat-messages">


        </div>

    </div>
    <div class="popup-messages-footer">
        <textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
        <!-- <div class="btn-footer">
            <button class="bg_none"><i class="fa fa-film"></i> </button>
            <button class="bg_none"><i class="fa fa-camera"></i> </button>
            <button class="bg_none"><i class="fa fa-paperclip"></i> </button>
            <button class="bg_none pull-right"><i class="fa fa-thumbs-up"></i> </button>
        </div>-->
    </div>
</div>
@endsection

@section('header')
            <style type="text/css">
 #custom-search-input {
  background: #e8e6e7 none repeat scroll 0 0;
  margin: 0;
  padding: 10px;
}
   #custom-search-input .search-query {
   background: #fff none repeat scroll 0 0 !important;
   border-radius: 4px;
   height: 33px;
   margin-bottom: 0;
   padding-left: 7px;
   padding-right: 7px;
   }
   #custom-search-input button {
   background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
   border: 0 none;
   border-radius: 3px;
   color: #666666;
   left: auto;
   margin-bottom: 0;
   margin-top: 7px;
   padding: 2px 5px;
   position: absolute;
   right: 0;
   z-index: 9999;
   }
   .search-query:focus + button {
   z-index: 3;   
   }
   .all_conversation button {
   background: #f5f3f3 none repeat scroll 0 0;
   border: 1px solid #dddddd;
   height: 38px;
   text-align: left;
   width: 100%;
   }
   .all_conversation i {
   background: #e9e7e8 none repeat scroll 0 0;
   border-radius: 100px;
   color: #636363;
   font-size: 17px;
   height: 30px;
   line-height: 30px;
   text-align: center;
   width: 30px;
   }
   .all_conversation .caret {
   bottom: 0;
   margin: auto;
   position: absolute;
   right: 15px;
   top: 0;
   }
   .all_conversation .dropdown-menu {
   background: #f5f3f3 none repeat scroll 0 0;
   border-radius: 0;
   margin-top: 0;
   padding: 0;
   width: 100%;
   }
   .all_conversation ul li {
   border-bottom: 1px solid #dddddd;
   line-height: normal;
   width: 100%;
   }
   .all_conversation ul li a:hover {
   background: #dddddd none repeat scroll 0 0;
   color:#333;
   }
   .all_conversation ul li a {
  color: #333;
  line-height: 30px;
  padding: 3px 20px;
}
   .member_list .chat-body {
   margin-left: 47px;
   margin-top: 0;
   }
   .top_nav {
   overflow: visible;
   }
   .member_list .contact_sec {
   margin-top: 3px;
   }
   .member_list li {
   padding: 6px;
   }
   .member_list ul {
   border: 1px solid #dddddd;
   border-left: 0;
   border-right: 0;
   }
   .chat-img img {
   height: 34px;
   width: 34px;
   }
   .member_list li {
   border-bottom: 1px solid #dddddd;
   padding: 6px;
   }
   .member_list li:last-child {
   border-bottom:none;
   }
   .member_list {
    width:100%;
   height: 599px;
   overflow-x: hidden;
   overflow-y: auto;
   border-left:1px solid #ccc;
   border-bottom:1px solid #ccc;
   }
   .sub_menu_ {
  background: #e8e6e7 none repeat scroll 0 0;
  left: 100%;
  max-width: 233px;
  position: absolute;
  width: 100%;
}
.sub_menu_ {
  background: #f5f3f3 none repeat scroll 0 0;
  border: 1px solid rgba(0, 0, 0, 0.15);
  display: none;
  left: 100%;
  margin-left: 0;
  max-width: 233px;
  position: absolute;
  top: 0;
  width: 100%;
}
.all_conversation ul li:hover .sub_menu_ {
  display: block;
}
.new_message_head button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: medium none;
}
.new_message_head {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  font-size: 13px;
  font-weight: 600;
  padding: 18px 10px;
  width: 100%;
}
.message_section {
  border: 1px solid #dddddd;
  min-height: 620px;
}
.chat_area {
  float: left;
  height: 520px;
  overflow-x: hidden;
  overflow-y: auto;
  width: 100%;
}
.chat_area li {
  padding: 14px 14px 0;
}
.chat_area li .chat-img1 img {
  height: 40px;
  width: 40px;
  margin-bottom: -50px;
}
.chat_area .chat-body1 {
  margin-left: 50px;
}
.chat-body1 p {
  background: #f7cce1 none repeat scroll 0 0;
  padding: 10px;
  margin-bottom: 0px;
  border-radius: 8px;
}
.chat_area .admin_chat .chat-body1 {
  margin-left: 0;
  margin-right: 50px;
  margin-top: -50px !important;
}
.chat_area li:last-child {
  padding-bottom: 10px;
}
.message_write {
  background: #f5f3f3 none repeat scroll 0 0;
  float: left;
  padding: 15px;
  width: 100%;
}

.message_write textarea.form-control {
  height: 70px;
  padding: 10px;
}
.chat_bottom {
  float: left;
  margin-top: 13px;
  width: 100%;
}
.upload_btn {
  color: #777777;
}
.sub_menu_ > li a, .sub_menu_ > li {
  float: left;
  width:100%;
}
.member_list li:hover {
  background: #428bca none repeat scroll 0 0;
  color: #fff;
  cursor:pointer;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.clearfix {
  clear: both;
}
/*-------------------------------------
* Styles for chatting Modules
* All chat related styles goes down
*-------------------------------------*/
#chat-wrapper {
    position: fixed; 
    top:auto;
    right:20px;
    width:240px;
    bottom:0;
    background:none;
}
#chat-wrapper .chat-list-header{
    padding: 10px;
    border: 1px solid #49b2f8;
    background: #6fc3f0;
    color: #fff;
    cursor: pointer;
}
#chat-wrapper .chat-list-header h4{
    margin: 0;
}
#chat-wrapper #chat-users {
    display: block;
    background: #fff;
    border: 1px solid #49b2f8;
    padding: 0;
    margin: 0;
    min-height: 320px;
    max-height: 460px;
    overflow-y: scroll;
}
#chat-wrapper #chat-users li{
    width: 100%;
    padding: 5px 10px;
    border-bottom: 1px solid #49b2f8;
}
.chatFooter {
    padding: 7px 10px;
    border: 1px solid #49b2f8;
    font-size: 15px;
    font-weight: bold;
    color: #455ac9;
    cursor: pointer;
}
.chatFooter p .batch {
    background: #16168669;
    padding: 2px 7px;
    border-radius: 50%;
    color: #fff;
    border: 1px solid #1616864a;
    font-size: 12px;
}
.chatFooter p{
    margin: 0;
}
.popup-box {
   background-color: #ffffff;
    border: 1px solid #b0b0b0;
    bottom: 0;
    display: none;
    height: 415px;
    position: fixed;
    right: 270px;
    width: 300px;
    font-family: 'Open Sans', sans-serif;
}
.round.hollow {
    margin: 40px 0 0;
}
.round.hollow a {
    border: 2px solid #ff6701;
    border-radius: 35px;
    color: red;
    color: #ff6701;
    font-size: 23px;
    padding: 10px 21px;
    text-decoration: none;
    font-family: 'Open Sans', sans-serif;
}
.round.hollow a:hover {
    border: 2px solid #000;
    border-radius: 35px;
    color: red;
    color: #000;
    font-size: 23px;
    padding: 10px 21px;
    text-decoration: none;
}
.popup-box-on {
    display: block !important;
}
.popup-box .popup-head {
    background-color: #fff;
    clear: both;
    color: #7b7b7b;
    display: inline-table;
    font-size: 17px;
    padding: 7px 10px;
    width: 100%;
     font-family: Oswald;
}
.bg_none i {
    border: 1px solid #ff6701;
    border-radius: 25px;
    color: #ff6701;
    font-size: 17px;
    height: 33px;
    line-height: 30px;
    width: 33px;
}
.bg_none:hover i {
    border: 1px solid #000;
    border-radius: 25px;
    color: #000;
    font-size: 17px;
    height: 33px;
    line-height: 30px;
    width: 33px;
}
.bg_none {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
}
.popup-box .popup-head .popup-head-right {
    margin: 0;
    position: absolute;
    right: 0;
    top: 0;
    padding: 5px 8px;
    background: #f2f2f2;
}
.popup-box .popup-messages {
}
.popup-head-left img {
    border: 1px solid #7b7b7b;
    border-radius: 50%;
    width: 36px;
}
.popup-messages-footer > textarea {
    border-bottom: 1px solid #b2b2b2 !important;
    height: 34px !important;
    margin: 7px;
    padding: 5px !important;
     border: medium none;
    width: 95% !important;
}
.popup-messages-footer {
    background: #fff none repeat scroll 0 0;
    bottom: 0;
    position: absolute;
    width: 100%;
}
.popup-messages-footer .btn-footer {
    overflow: hidden;
    padding: 2px 5px 10px 6px;
    width: 100%;
}
.simple_round {
    background: #d1d1d1 none repeat scroll 0 0;
    border-radius: 50%;
    color: #4b4b4b !important;
    height: 21px;
    padding: 0 0 0 1px;
    width: 21px;
}

.popup-box .popup-messages {
    background: #6fc3f02b none repeat scroll 0 0;
    height: 308px;
    overflow: auto;
}
.direct-chat-messages {
    overflow: auto;
    padding: 10px;
    transform: translate(0px, 0px);
    margin-bottom: 0px; 
}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages abbr.timestamp {
    background: #3f9684 none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}

.popup-head-right .btn-group {
    display: inline-flex;
  margin: 0 8px 0 0;
  vertical-align: top !important;
}
.chat-header-button {
    background: transparent none repeat scroll 0 0;
    border: 0;
    border-radius: 0;
    font-size: 14px;
    height: 18px;
    width: 12px;
    cursor: pointer;
}
.popup-head-right .btn-group .dropdown-menu {
    border: medium none;
    min-width: 122px;
  padding: 0;
}
.popup-head-right .btn-group .dropdown-menu li a {
    font-size: 12px;
    padding: 3px 10px;
  color: #303030;
}

.popup-messages abbr.timestamp {
    background: #3f9684  none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages .direct-chat-messages {
    height: auto;
}
.popup-messages .direct-chat-text {
    background: #dfece7 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}

.popup-messages .direct-chat-timestamp {
    color: #2e1ca7;
    opacity: 0.6;
}

.popup-messages .direct-chat-name {
  font-size: 15px;
  font-weight: 600;
  margin: 0 0 0 49px !important;
  color: #2e1ca7;
  opacity: 0.9;
}
.popup-messages .direct-chat-info {
    display: block;
    font-size: 12px;
    margin-bottom: 0;
}
.popup-messages  .big-round {
    margin: -9px 0 0 !important;
}
.popup-messages  .direct-chat-img {
    border: 1px solid #fff;
  background: transparent; /*#3f9684  none repeat scroll 0 0;*/
    border-radius: 50%;
    float: left;
    height: 40px;
    margin: -21px 0 0;
    width: 40px;
}
.direct-chat-reply-name {
    color: #2e1ca7;
    font-size: 15px;
    margin: 0 0 0 10px;
    opacity: 0.9;
}

.direct-chat-img-reply-small
{
    border: 1px solid #fff;
    border-radius: 50%;
    float: left;
    height: 20px;
    margin: 0 8px;
    width: 20px;
  background:#3f9684;
}

.popup-messages .direct-chat-msg {
    margin-bottom: 10px;
    position: relative;
}

.popup-messages .doted-border::after {
  background: transparent none repeat scroll 0 0 !important;
    border-right: 2px dotted #fff !important;
  bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
   display: inline;
    z-index: -2;
}

.popup-messages .direct-chat-msg::after {
    background: #fff none repeat scroll 0 0;
    border-right: medium none;
    bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
   display: inline;
    z-index: -2;
}
.direct-chat-text::after, .direct-chat-text::before {
   
    border-color: transparent #dfece7 transparent transparent;
    
}
.direct-chat-text::after, .direct-chat-text::before {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: transparent #d2d6de transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: medium;
    content: " ";
    height: 0;
    pointer-events: none;
    position: absolute;
    right: 100%;
    top: 15px;
    width: 0;
}
.direct-chat-text::after {
    border-width: 5px;
    margin-top: -5px;
}
.popup-messages .direct-chat-text {
    background: #e4fff5 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}
.direct-chat-text {
    background: #d2d6de none repeat scroll 0 0;
    border: 1px solid #d2d6de;
    border-radius: 5px;
    color: #444;
    margin: 5px 0 0 50px;
    padding: 5px 10px;
    position: relative;
}
.blink_me {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

.supportIcon {
    padding: 7px 10px;
    border: 1px solid #49b2f8;
    font-size: 15px;
    font-weight: bold;
    color: #455ac9;
    cursor: pointer;
    float: right;
    width: 85px;
    height: 85px;
    border-radius: 50px;
    margin-bottom: 25px;
    background: green;
    color: #fff;
}
.supportIcon>i.fa{
    font-size: 57px;
    padding: 25px 4px;
}
#supportModal .modal-content {
    background: #057709;
    border-radius: 0;
    color: #fff;
}
#supportModal .modal-body {
    padding: 0;
}
#supportChatMessages {
    height: 420px;
    overflow-y: auto;
    background: #fff;
}
</style>
@endsection

@section('footer')
<!-- END JAVASCRIPTS -->
<script src="http://localhost/mmcm-chat/node_modules/socket.io-client/dist/socket.io.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
let me = "{{ Auth::user()->id }}";
let myName = "{{ Auth::user()->name }}";
let myGroup = "<?php echo ( in_array( Auth::user()->id, [1] ) ) ? 'admin' : 'user'; ?>";
let mySocketId;
let myAvatar = "{{ asset('avatar/me.png') }}";
let yourAvatar = "{{ asset('avatar/you.png') }}";
var chatBox;
console.log(chatBox);
var socket = io.connect( 'http://192.168.0.117:4000' );
var supportBox;
jQuery(document).ready(function () {
    chatBox = $('#qnimate');
    supportBox = $('#supportBox');
    let supportModal = $('#supportModal');
    let supportIcon = $('#supportIcon');
    var chatWrapper = $('#chat-wrapper');
    var chatFooter = $('#chatFooter');
    var chatUsers = $(chatWrapper).find('#chat-users');

    $(chatWrapper).find('#chat-lists .chat-list-header').click(function(e){
        // $(this).parent('#chat-lists').toggleClass('hide');
    });

    $(chatWrapper).find('.chatFooter').on("click", function(e){
        var chCouter = $(this).find('#pendingChatCount');
        $(chCouter).removeClass('blink-chat').text(0);
        $(chatWrapper).find('#chat-lists').toggleClass('hide');
    });

    $(chatBox).find('span#removeClass').on("click", function(e){
        const confirmed = confirm('Are you sure to end chat?');
        const parent = $(this).parents('#qnimate');
        const id = $(parent).attr('data-id');
        if( confirmed ) {
            $(parent).removeClass('popup-box-on');
            socket.emit('end_chat', {id:id});
        }
        return false;
    });

    let textInput  = document.getElementById('status_message');
    $(textInput).keypress(function(e){
        if(e.which == 13 || e.keyCode == 13) {
            let message = $(this).val();
            let receiver = $(this).attr('data-id');
            let socket_id = $(this).attr('data-socket');
            let sender = me;
            let data = { sender: sender, receiver: receiver, msg: message, socket_id: socket_id };
            socket.emit('personal_message', data);
            $(this).val('');
            return false;
        }
        
    });

    let supportTextarea  = $(supportBox).find('#chatBoxTextarea');
    $(supportTextarea).keypress(function(e){
        if(e.which == 13 || e.keyCode == 13) {
            let message = $(this).val();
            let sender = me;
            let data = { msg: message };
            socket.emit('group_message', data);
            $(this).val('');
            return false;
        }
        
    });

    $(supportIcon).on("click", function(e){
        // $(supportModal).modal('toggle');
        openChatBox(this);
    });

    socket.on('need_info', (data, messages) => {
        mySocketId = data.socket_id;
        socket.emit('my_info', {user_id: me, username: myName, group: myGroup});

        if( messages.length > 0 ) {
            for (var i = messages.length - 1; i >= 0; i--) {
                let name = ( parseInt( messages[i].sender_id ) === parseInt( me ) ) ? 'You' : messages[i].sender_name;
                let date = new Date(messages[i].sending_at);
                let today = new Date();
                let D = date.toDateString();
                let MO = date.getMonth();
                let H = date.getHours();
                let M = date.getMinutes();
                let AP = 'AM';
                const diffTime = Math.abs(today.getTime() - date.getTime());
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
                if ( H >= 12 ) {
                    H = H - 12;
                    AP = 'PM';
                }
                if( diffDays == 1 ) {
                    D = 'Today';
                } else if( diffDays == 2 ) {
                    D = 'Yesterday';
                }
                let chat = {
                    'id': messages[i].id,
                    'name': name,
                    'message': messages[i].message,
                    'time': D + ' ' + H + ':' + M + AP,
                    'image': ( name == 'You' ) ? myAvatar : yourAvatar
                };
                showSupportMessage(chat);
            }

            //scroll message to top
            $(chatBox).find('.popup-messages').scrollTop($(chatBox).find('.direct-chat-messages').prop('scrollHeight'));
        }
    });

    // socket.on('personal_messages', (data) => {
    //   console.log(data);
    //     if( data.length > 0 ) {
    //         for (var i = data.length - 1; i >= 0; i--) {
    //             // console.log( data[i].sending_at );
    //             let name = ( parseInt( data[i].sender_id ) === parseInt( me ) ) ? 'You' : data[i].sender_name;
    //             let date = new Date(data[i].sending_at);
    //             let today = new Date();
    //             let D = date.toDateString();
    //             let MO = date.getMonth();
    //             let H = date.getHours();
    //             let M = date.getMinutes();
    //             let AP = 'AM';
    //             const diffTime = Math.abs(today.getTime() - date.getTime());
    //             const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); 
    //             // console.log(diffDays); 
    //             if ( H >= 12 ) {
    //                 H = H - 12;
    //                 AP = 'PM';
    //             }
    //             if( diffDays == 1 ) {
    //                 D = 'Today';
    //             } else if( diffDays == 2 ) {
    //                 D = 'Yesterday';
    //             }
    //             let chat = {
    //                 'id': data[i].id,
    //                 'name': name,
    //                 'message': data[i].message,
    //                 'time': D + ' ' + H + ':' + M + AP,
    //                 'image': ( name == 'You' ) ? myAvatar : yourAvatar
    //             };
    //             var chatTemplate = `
    //                 <!-- <div class="chat-box-single-line">
    //                     <abbr class="timestamp">${chat.time}</abbr>
    //                 </div> -->

    //                 <!-- Message. Default to the left -->
    //                 <div class="direct-chat-msg doted-border">
    //                     <div class="direct-chat-info clearfix">
    //                         <span class="direct-chat-name pull-left">${chat.name}</span>
    //                     </div>
    //                     <!-- /.direct-chat-info -->
    //                     <img alt="avtr" src="${chat.image}" class="direct-chat-img">
    //                     <div class="direct-chat-text">
    //                         ${chat.message}
    //                     </div>
    //                     <div class="direct-chat-info clearfix">
    //                         <span class="direct-chat-timestamp pull-right">${chat.time}</span>
    //                     </div>
    //                     <!-- <div class="direct-chat-info clearfix">
    //                         <span class="direct-chat-img-reply-small pull-left">

    //                         </span>
    //                     </div>-->
    //                     <!-- /.direct-chat-text -->
    //                 </div>`;
    //             $(chatBox).find('.direct-chat-messages').append(chatTemplate);
    //         }

    //         //scroll message to top
    //         $(chatBox).find('.popup-messages').scrollTop($(chatBox).find('.direct-chat-messages').prop('scrollHeight'));
    //     }
    // });

    socket.on('online', (data) => {
        if(data) {
            $(supportIcon).addClass('online');
        } else {
            $(supportIcon).removeClass('online');
        }
    });

    // socket.on('agent_join', (data) => {
    //     if ( !$(chatBox).hasClass('popup-box-on') && (parseInt(data.agent_id) !== parseInt(me))) {
    //         $(chatBox).addClass('popup-box-on');
    //     }
    //     $(chatBox).find('#status_message').attr('data-id', data.agent_id);
    //     $(chatBox).find('#chatUserName').attr('data-id', data.agent_name);
    // });

    socket.on('group_message', (data) => {
        let name = ( parseInt( data.id ) === parseInt( me ) ) ? 'You' : data.name;
        let date = new Date();
        let H = date.getHours();
        let M = date.getMinutes();
        let AP = 'AM';

        if ( H >= 12 ) {
            H = H - 12;
            AP = 'PM';
        }

        let chat = {
            'id': data.id,
            'name': name,
            'message': data.msg,
            'time': H + ':' + M + AP,
            'image': ( name == 'You' ) ? myAvatar : yourAvatar,
        };
        

        showSupportMessage(chat);

        // $(chatBox).find('.direct-chat-messages').append(chatTemplate);
        // var user = $(chatUsers).find('#1');
        // openChatBox(user);
    });

    socket.on('pm', (data) => {
        let name = ( parseInt( data.id ) === parseInt( me ) ) ? 'You' : data.name;
        let date = new Date();
        let H = date.getHours();
        let M = date.getMinutes();
        let AP = 'AM';

        if ( H >= 12 ) {
            H = H - 12;
            AP = 'PM';
        }

        let chat = {
            'id': data.id,
            'name': name,
            'message': data.msg,
            'time': H + ':' + M + AP,
            'image': ( name == 'You' ) ? myAvatar : yourAvatar,
            'sender_name': data.name
        };
        
        showUserMessage(chat);

        // $(chatBox).find('.direct-chat-messages').append(chatTemplate);
        // var user = $(chatUsers).find('#1');
        // openChatBox(user);
    });

    socket.on('send message err', (msg) => {
        console.log(msg);
    });

    socket.on('users', (data) => {
      console.log(data);
        let member_list = $(supportBox).find('#member_list');
        $(member_list).html('');
        let html = '';

        // console.log(nicknames);
        for (var i = 0; i < data.length; i++) {
                var nick = '<li class="left clearfix" data-name="' + data[i].name + '" data-userid="' + data[i].user_id + '" data-socket="' + data[i].socket_id + '" onclick="openChatBox(this)"><span class="chat-img pull-left"> <img src="' + yourAvatar + '" alt="User" class="img-circle"> </span> <div class="chat-body clearfix"> <div class="header_sec"> <strong class="primary-font">' + data[i].name + '</strong> </div> </div> </li>'
                html += nick;

                // nick.onclick = function(e) {
                //     e.preventDefault();
                //     // socket.emit('get old messages', {id: $(this).attr('data-id')});
                //     openChatBox(this);
                // }
        }

        // //update counter
        // $(chatWrapper).find('#onlineUserCount').text(parseInt(nicknames.length) -1);

        $(member_list).html(html);
    });

    socket.on('user_left', (data) => {
        console.log(data.name + ' offline');
        const chatWith = $(chatBox).find('#status_message').attr('data-id');
        if( myGroup == 'user' ) {
            if( parseInt(chatWith) === parseInt(data.id) ) {
                $(chatBox).find('#status_message').attr('data-id', 0);
            }
        } else {
            $(supportBox).find('#userChatMessages').append('<li class="left clearfix"> <span class="chat-img1 pull-left"><i class="fa fa-times"></i></span> <div class="chat-body1 clearfix"> <p>User offline</p> </div> </li>');
        }
    });

    socket.on('user join', (data) => {
      $(supportBox).find('#userChatMessages').append('<li class="left clearfix"> <span class="chat-img1 pull-left"><i class="fa fa-check-circle"></i></span> <div class="chat-body1 clearfix"> <p>User join the chat</p> </div> </li>');
    });

    socket.on('bug reporting', (err) => {
        console.log(err);
    });

});

function showUserMessage(chat) {
    console.log(chat);
    var chatTemplate = `
            <!-- <div class="chat-box-single-line">
                <abbr class="timestamp">${chat.time}</abbr>
            </div> -->

            <!-- Message. Default to the left -->
            <div class="direct-chat-msg doted-border">
                <div class="direct-chat-info clearfix">
                    <span class="direct-chat-name pull-left">${chat.name}</span>
                </div>
                <!-- /.direct-chat-info -->
                <img alt="avtr" src="${chat.image}" class="direct-chat-img">
                <div class="direct-chat-text">
                    ${chat.message}
                </div>
                <div class="direct-chat-info clearfix">
                    <span class="direct-chat-timestamp pull-right">${chat.time}</span>
                </div>
                <!-- <div class="direct-chat-info clearfix">
                    <span class="direct-chat-img-reply-small pull-left">

                    </span>
                </div>-->
                <!-- /.direct-chat-text -->
            </div>`;
        

            $(chatBox).find('.direct-chat-messages').append(chatTemplate);
            if ( !$(chatBox).hasClass('popup-box-on') ) {
                $(chatBox).addClass('popup-box-on');
                const statusM = $(chatBox).find('#status_message');

                if( parseInt( chat.id ) !== parseInt(me) ) {
                  $(chatBox).find('#chatUserName').text(chat.sender_name);
                  $(statusM).attr('data-to', chat.id);
                  $(statusM).attr('data-id', chat.id);
                }
            }

        $(chatBox).find('.popup-messages').scrollTop($(chatBox).find('.direct-chat-messages').prop('scrollHeight'));
}

function showSupportMessage(chat) {

    if( chat.name == 'You' ) {
        $(supportBox).find('#userChatMessages').append('<li class="left clearfix admin_chat"> <span class="chat-img1 pull-right"> <img src="'+ chat.image +'" alt="Avatar" class="img-circle"> </span> <div class="chat-body1 clearfix"> <p>' + chat.message + '</p> <div class="chat_time pull-left">' + chat.time + '</div> </div> </li>');
    } else {
        $(supportBox).find('#userChatMessages').append('<li class="left clearfix"> <span class="chat-img1 pull-left"> <img src="'+ chat.image +'" alt="User Avatar" class="img-circle"> </span> <div class="chat-body1 clearfix"> <p>' + chat.message + '</p> <div class="chat_time pull-right">' + chat.time + '</div> </div> </li>');
    }

    //scroll message to top
    $(supportBox).find('.chat_area').scrollTop($(supportBox).find('#userChatMessages').prop('scrollHeight'));
}


function showUnAcceptedList(data) {
    console.log(data);
}

function openToChatBox(_this, supportBox) {

    supportBox = $('#supportBox');
    let msgbox = $(supportBox).find('#chatBoxTextarea');
    let currentUserId = $(msgbox).attr('data-id');

    if( currentUserId != 'undefined' || currentUserId != '') {
        confirmed = confirm('Are you sure to end current chat?');

        if( confirmed ) {
            
        } else {
            return false;
        }
    }


    $(supportBox).find('#currentUserName').text($(_this).attr('data-name'));
    let userId = $(_this).attr('data-userid');
    socket.emit('join_chat', {id:userId});
    $(msgbox).removeAttr('disabled');
    $(msgbox).attr('data-id', userId);
    let messagesList = $(supportBox).find('#userChatMessages');
    $(messagesList).html('<li class="left clearfix"> <span class="chat-img1 pull-left"> <img src="'+ yourAvatar +'" alt="User Avatar" class="img-circle"> </span> <div class="chat-body1 clearfix"> <p>' + $(_this).attr('data-message') + '</p> <div class="chat_time pull-right">09:40PM</div> </div> </li>');
}

function openChatBox(_this) {
  // console.log(_this);
    let id = $(_this).attr('data-userid');
    let name = $(_this).attr('data-name');
    let socket_id = $(_this).attr('data-socket');
    let statusM = $(chatBox).find('#status_message');
    console.log(id);

    $(chatBox).addClass('popup-box-on');
    $(chatBox).attr('data-to', id);
    $(chatBox).find('#chatUserName').text(name);
    $(chatBox).find('#chatUserAvatar').attr('src', yourAvatar);
    $(statusM).attr('data-to', id);
    $(statusM).attr('data-id', id);
    $(chatBox).find('.direct-chat-messages').html('');

    // $(_this).removeClass('blink-chat');
}
</script>
@endsection