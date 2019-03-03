#Project UTS Pemrograman Web

##Berupa project membuat replika social media dengan bahasa pemrograman PHP.

**Ikuti konvensi ini**
* Database
Lihat struktur database di design/Facenote ERD.
Nama database: facenote.

* Login

Response login tersimpan di = login_res(boolean).
Yang menghandle login = login-response.php.
Form menggunakan POST.

###Atribute form login:
1. Username = username
2. Password = password
3. Remember Me = remember

* Profile View(profile-view.php)

Jika ingin mendapatkan data friend list, gunakan lah ajax ke friend-list.php dengan method GET yang akan mengembalikan data berupa JSON berisi username dan name file profile picture.

