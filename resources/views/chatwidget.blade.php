@extends('layout.default')

@section('pageStyle')
    <link type="text/css" href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
@endsection

@section('pageScript')
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/placeholders/placeholders.js') }}"></script>
    <script src="{{ asset('assets/js/chat.js') }}"></script>
@endsection

@section('content')
    <!--BEGIN CHAT POPUP-->
    <div class="app_chat_button popup_chat">
        <i class="material-icons">chat</i>
    </div>
    <div class="pvr_chat_cnt active">
        <div class="app_chat_i">
            <div class="chat-close">
                <i class="material-icons">close</i>
            </div>
            <div class="app_chat_head">
                <div class="pvr-user-w with-status status-green">
                    <div class="pvr-user-avatar-w">
                        <div class="user-avatar">
                            <img alt="" src="assets/images/avatar/user-1.jpg">
                        </div>
                    </div>
                    <div class="user-name">
                        <h6 class="user-title">
                            John Smith
                        </h6>
                        <div class="user-role">
                            Administrator
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-messages theme_2">
                <div class="message">
                    <div class="message-content">
                        Lorem Ipsum is simply dummy.
                    </div>
                </div>
                <div class="date-break">
                    Mon 10:20am
                </div>
                <div class="message">
                    <div class="message-content">
                        Lorem Ipsum is simply dummy text of the printing.
                    </div>
                </div>
                <div class="message self">
                    <div class="message-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </div>
            </div>
            <div class="chat-controls">
                <input class="message-input" id="message-input" placeholder="Type your message here..." type="text">
                <div class="chat-extra">
                    <a href="javascript:void(0)">
                        <span class="extra-tooltip">Attach Document</span>
                        <i class="material-icons">attach_file</i>
                    </a>
                    <a href="javascript:void(0)">
                        <span class="extra-tooltip">Insert Photo</span>
                        <i class="material-icons">add_a_photo</i>
                    </a>
                    <a href="javascript:void(0)" class="pull-right change_chat_theme">
                        <span class="extra-tooltip">Change chat theme</span>
                        <i class="material-icons">refresh</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--END CHAT POPUP-->
@endsection