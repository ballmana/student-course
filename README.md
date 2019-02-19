# student-course
Learn &amp; do

# Installation
- Clone git this Repository.
- เปิด command line cd เข้าไปที่โฟล์เดอร์ project เรา หลังจากนั้นพิมพ์ "composser install" แล้วกด Enter
- สร้างไฟล์ .env และทำการ config ไฟล์ให้ตรงกับสภาพแวดล้อมของเรา (database, server) หากไม่เข้าใจอ่านคู่มือที่ https://laravel.com/docs/5.7/installation
- สร้างฐานข้อมูล โดยชื่อฐานข้อมูลต้องตรงกับชื่อฐานข้อมูลในไฟล์ .env ที่เราเพิ่งทำเมื่อกี้
- เปิด command line ขึ้นมาอีกครั้ง และพิมพ์คำสั่ง "php artisan key:generate" แล้วกด Enter
- ยังอยู่ใน Command line อยู่นะ หลังจากคำสั่งก่อนหน้านี้เสร็จแล้วให้พิมพ์คำสั่งต่อไป "npm i" แล้วกด Enter
- เมื่อสำเร็จให้พิมพ์อีก "npm run dev" หรือ "npm run prod" แล้วกด Enter
- เมื่อสำเร็จให้พิมพ์อีก "php artisan migrate" แล้วกด Enter
- เมื่อสำเร็จให้พิมพ์อีก "php artisan db:seed" แล้วกด Enter
- เมื่อติดตั้งสำเร็จแล้วลอง run ดูโดยการพิมพ์คำสั่ง "php artisan serve" แล้วกด Enter จากนั้น เข้าไปที่ Browser พิมพ์ url http://127.0.0.1:8000
