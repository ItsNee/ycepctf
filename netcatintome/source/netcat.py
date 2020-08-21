import socket
serverSocket = socket.socket(socket.AF_INET, socket.SOCK_STREAM);



serverSocket.bind(("0.0.0.0",666)); 
serverSocket.listen(); 


while(True): 


    (clientConnected, clientAddress) = serverSocket.accept(); 
    
    
    print("Accepted a connection request from %s:%s"%(clientAddress[0], clientAddress[1])); 
    
    
    clientConnected.send("flag{NC_1s_4W3S0m3}".encode()); 
    clientConnected.close()
