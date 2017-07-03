<!DOCTYPE html>
<html>
    <head>
        <title>Chat room</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
    </head>
    <body>
        <div id="app">
            <div>
                @{{ usersInRoom.length }}
            </div>
            <app-header  apptitle="Sample Header"></app-header>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage" currentuser="{{ Auth::user()->name }}"></chat-composer>
        </div>
        <script>
            window.Laravel = { csrfToken : '{{ csrf_token() }}' };
        </script>
        <script src="js/app.js"></script>
    </body>
</html>