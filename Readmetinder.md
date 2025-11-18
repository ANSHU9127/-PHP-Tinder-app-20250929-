# MatchMate – Tinder-Style Swipe Matching App  
A full-stack mobile application built using **React Native (Expo)** and **Laravel 11**, designed to replicate the swipe-based matching experience similar to Tinder.

The app displays recommended people as cards. Users can **swipe right to Like** or **swipe left to Dislike**. Liked profiles are stored and displayed in a separate list.  
The backend provides all required APIs, maintains RDB schema, includes Swagger documentation, and runs a cron job to monitor popular profiles.

---

## 📱 Mobile App (React Native)
### Features
- Splash screen  
- Tinder-style swipe deck  
- Swipe Right → Like  
- Swipe Left → Dislike  
- Recommended people list (via API)  
- Liked people screen  
- **Atomic Design** component structure  
- **React Query** for server state  
- **Recoil** for global UI/app state  
- Axios-based API integration  

---

## 🖥 Backend (Laravel 11)
### Features
- People list API with pagination  
- Like person API  
- Dislike person API  
- Liked people list API  
- **Cron job**: Sends email to admin if any person receives **50+ likes**  
- **Swagger (OpenAPI 3)** documentation  
- MySQL-based relational DB schema  
- MVC folder structure  
- CORS enabled for mobile app

---

## 🗄 Database Schema
### **people**
- id  
- name  
- age  
- location  
- pictures (JSON)

### **likes**
- id  
- person_id  
- status (like/dislike)

---

## 📌 API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET    | /people              | Get paginated recommended users |
| POST   | /people/{id}/like    | Like a user |
| POST   | /people/{id}/dislike | Dislike a user |
| GET    | /liked               | List of liked users |

---

## ⚙️ Setup Instructions

### Frontend
```bash
cd frontend
npm install
npm start
```

### Backend
```bash
cd backend
composer install
cp .env.example .env
php artisan migrate
php artisan serve
```

### Run Cron Job
```bash
php artisan schedule:work
```

---

## 📧 Cron Job Description
A scheduled command checks if any person has been **liked 50 times or more**.  
If true, an email is automatically sent to the admin email configured in `.env`.

---

## 📄 Documentation
Swagger API docs included at:
```
/api/documentation
```

---

## 🎯 Summary
This project fulfills all assignment requirements:
- Mobile app with Tinder-like swipe  
- Backend with Like/Dislike logic  
- Liked users list  
- Pagination API  
- Cron job + email notification  
- RDB schema  
- Swagger documentation  
