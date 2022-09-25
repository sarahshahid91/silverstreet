# silverstreet

- Application build using PHP Laravel
- 4 APIs created

1. HTTP API to insert an SMS Message in the queue<br>
URL: http://127.0.0.1:8000/api/create-sms<br>
Request : POST<br>

2. HTTP API to consume an SMS Message from the queue and returns it in JSON format (FIFO)<br>
URL: http://127.0.0.1:8000/api/get-sms/{limit?}<br>
Request : GET<br>

3. HTTP API to get the total number of messages in the queue<br>
URL: http://127.0.0.1:8000/api/get-total-sms<br>
Request: GET<br>

4. HTTP API to get all SMS messages in the queue in JSON format<br>
URL: http://127.0.0.1:8000/api/get-list-sms<br>
Request: GET
