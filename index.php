<!doctype html>
<html>
  <head>
    <title>Socket.IO chat</title>
    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body { font: 13px Helvetica, Arial; }
      form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
      form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
      form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
      #messages { list-style-type: none; margin: 0; padding: 0; }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }
    </style>
  </head>
  <body>
    <div id="chat">
      {{ message }}
      <ul id="messages"></ul>
      <form action="">
        <input id="m" autocomplete="off" /><button>Send</button>
      </form>
    </div>
  </body>
</html>

<!-- <script src="/socket.io/socket.io.js"></script>
<script src="/vue"></script>
<script src="/vue/dist/vue.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
var chat = new Vue({
  el: '#chat',
  data: {
    message: 'hello',
  },
  mounted: function(){
    this.initSocket();
  },
  methods:{
    initSocket: function(){
      this.socketIO.on('connection', function(socket){
        console.log('a user connected');
      });
    }
  }
})
</script>
