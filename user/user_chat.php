<?php
include('../user/assets/config/dbconn.php');
include('../user/assets/inc/header.php');
include('../user/assets/inc/sidebar.php');
include('../user/assets/inc/navbar.php');
?>

<body>
    <div class="container mt-4">
        <h1 class="h3 mb-4">Chat Support</h1>
        <div class="card">
            <div class="card-body">
                <div id="chat-messages" class="mb-3" style="height: 400px; overflow-y: scroll; border: 1px solid #ccc; padding: 10px;">
                    <!-- Chat messages will be appended here -->
                     <div class="d-flex justify-content-start mb-2">
                      <div class="bg-light p-2 rounded">
                         Hello, how can I help you today?
                         </div>
                     </div>
                      <div class="d-flex justify-content-end mb-2">
                       <div class="bg-primary text-white p-2 rounded">
                        I have a question about a recent transaction.
                        </div>
                      </div>
                      <div class="d-flex justify-content-start mb-2">
                      <div class="bg-light p-2 rounded">
                         Sure, can you provide me with more details?
                         </div>
                     </div>
                </div>

                 <div class="input-group">
                        <input type="text" id="message-input" class="form-control" placeholder="Type your message here">
                        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
                </div>
            </div>
        </div>
    </div>
    <script>
            function sendMessage() {
                const messageInput = document.getElementById('message-input');
                const message = messageInput.value.trim();

                if(message !== "") {
                  const chatMessages = document.getElementById('chat-messages');

                    const newMessage = document.createElement('div');
                    newMessage.classList.add('d-flex', 'justify-content-end', 'mb-2');

                    const messageBubble = document.createElement('div');
                   messageBubble.classList.add('bg-primary', 'text-white', 'p-2','rounded');
                    messageBubble.textContent = message;

                     newMessage.appendChild(messageBubble);
                     chatMessages.appendChild(newMessage);

                   messageInput.value = "";


                   //Dummy response from the support

                   setTimeout(() => {
                        const supportMessage = document.createElement('div');
                         supportMessage.classList.add('d-flex', 'justify-content-start', 'mb-2');

                         const supportBubble = document.createElement('div');
                         supportBubble.classList.add('bg-light', 'p-2','rounded');
                         supportBubble.textContent = "Thank you for your question. We will review it and respond shortly."
                         supportMessage.appendChild(supportBubble);

                         chatMessages.appendChild(supportMessage);
                          chatMessages.scrollTop = chatMessages.scrollHeight;
                     }, 1000)
                   chatMessages.scrollTop = chatMessages.scrollHeight;
                 }
            }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>