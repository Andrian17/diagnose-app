<div align="center">
  <img alt="Logo" src="./readme-image/dendy logo.png" width="100" />
</div>
<h1 align="center">
  Dendy Dharmawan
</h1>
<p align="center">
  <a href="https://dendydharmawan.thedev.id/" target="_blank">dendydharmawan.thedev.id</a>
</p>

</br>
</br>
</br>

<p align="center"><a href="https://github.com/dendydandees/diagnose-app" target="_blank"><img src="https://tailwindui.com/img/logos/workflow-mark-purple-600.svg" width="100"></a></p>

# Diagnose App

## Sistem Pakar Deteksi Dini Gangguan Kecemasan

Diagnose merupakan sebuah sistem yang dapat digunakan untuk melakukan deteksi dini mengenai gangguan kecemasan dan memberikan solusi dengan menerapkan metode forward chaining. Kamu dapat mendeteksi apakah kamu mengalami gangguan kecemasan atau tidak dengan melakukan konsultasi dan memilih beberapa gejala yang mungkin kamu alami. Selain itu dengan sistem ini kamu dapat menemukan informasi menarik seputar kesehatan mental yang dapat menambah wawasan mu. Jika kamu didiagnosa mengalami gangguan kecemasan jangan lupa hubungi psikolog yaa, untuk penanganan lebih lanjutnya.


### Catatan untuk kamu seorang pakar
Untuk kamu seorang pakar (psikolog, psikiater, dsb), kamu dapat melakukan pengelolaan data seperti data gejala, data gangguan, dan data aturan mengenai diagnosa gangguan kecemasan. Dan kamu juga dapat menambahkan informasi seputar kesehatan mental.

### Diagnose Landing Page
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/guest_welcome.png "Diagnose Landing Page")
### User Dashboard
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/user_dashboard.png "User Dashboard")
### User Consult
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/user_consult.png "User Consult")
### User Consult History
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/user_consultHistory_need_consultate.png "User Consult History")
### Expert Dashboard
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/expert_dashboard.png "Expert Dashboard")
### User Consult History for Expert
![Diagnose App - Sistem Pakar Deteksi Dini Gangguan Kecemasan](/readme-image/expert_consultHistory.png "User Consult History for Expert")

</br>
</br>

## Starting On Development

```
## instalation on local
composer install

## generate the key
php artisan key:generate

## start mysql server
!-- use your own database account,
!-- edit the env file if the db_username and db_pasword not the same,
!-- and then create a database like env file

sudo service mysql start
mysql -u <username> -p

## before run server, do migrate and seed
php artisan migrate --seed

## development start
npm install
npm run dev
php artisan serve
```

</br>
</br>

## Account List
### Expert Account
<table>
  <tr>
    <th>Number</th>
    <th>Email</th>
    <th>Password</th>
  <tr>
  <tr>
    <td>1</td>
    <td>nadyapuspita@personalgrowth.com</td>
    <td>Personalgrowth21</td>
  </tr>
</table>

### Admin Account
<table>
  <tr>
    <th>Number</th>
    <th>Email</th>
    <th>Password</th>
  <tr>
  <tr>
    <td>1</td>
    <td>admin@diagnose.com</td>
    <td>Diagnose21</td>
  </tr>
</table>

### User Account
<table>
  <tr>
    <th>Number</th>
    <th>Email</th>
    <th>Password</th>
  <tr>
  <tr>
    <td>1</td>
    <td>dendy@yopmail.com</td>
    <td>Gemscool88</td>
  </tr>
</table>
