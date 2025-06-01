Cách dùng java để chạy theo như đề bài 
![image (1)](https://github.com/user-attachments/assets/35e8b045-6b9f-48f0-9b78-ccb870186de8)

Viết 1 đoạn code đơn giản 

![1](https://github.com/user-attachments/assets/cbc4f47c-c620-4b41-9726-aedf2080ec24)

sử dụng javac để biên dịch lại 
sau đó dùng java để chạy thử 
![screenshot_1748746065](https://github.com/user-attachments/assets/43ed5fe8-4019-4f29-b9bc-ad9b8d0dc1b7)


Sử dụng lệnh java -Xms512m -Xmx2g Test để giới hạn heap size
![Screenshot 2025-06-01 095234](https://github.com/user-attachments/assets/a2ee526a-6e58-4fc4-9727-ef413346e701)
java -Xmx2g -XX:+UseG1GC Test sử dụng cái này để xác định loại GC mà jvm sử dụng 
![Screenshot 2025-06-01 095432](https://github.com/user-attachments/assets/f848f7fb-2459-4aaf-8da7-417865fc7ac0)


Có thể sử dụng java -Xmx2g -XX:+UseG1GC -Xlog:gc Test để theo dõi log khi GC hoạt động
![image](https://github.com/user-attachments/assets/adcde8e3-4dfb-4e0c-8be0-1f96d61e174e)



