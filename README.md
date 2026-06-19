# 🌌 Interestellar PHP

**Interestellar PHP** is a space-themed web application built with **PHP**, **MySQL**, **HTML**, and **CSS**.

The project is inspired by the atmosphere of *Interstellar*, deep space exploration, distant planets, astronauts, and futuristic mission records. It works as a digital space logbook where users can create, view, and delete fictional space missions.

Each mission includes important information such as the astronaut name, destination, mission type, mission description, optional image, and automatic registration date.

## 🚀 Live Demo

🌐 **Website:**
https://interestellar-data.infinityfreeapp.com

---

## ✨ Features

* Create new space missions.
* Store mission information in a MySQL database.
* Upload an optional image for each mission.
* View all registered missions on a separate page.
* Delete missions from the database.
* Display the creation date automatically.
* Use a responsive and cinematic space-inspired interface.

---

## 🛠️ Technologies Used

* **PHP**
* **MySQL**
* **phpMyAdmin**
* **HTML5**
* **CSS3**
* **XAMPP**
* **InfinityFree**

---

## 📁 Project Structure

```text
interestellar-php/
│
├── connection.example.php
├── index.php
├── missions.php
├── delete_mission.php
├── styles.css
├── riveira_nicolas.sql
└── uploads/
```

---

## 📄 Main Files

### `index.php`

This is the main page of the application.
It contains the form used to register a new space mission.

The user can enter the astronaut name, planet or destination, mission type, mission description, and upload an optional image.

### `missions.php`

This page displays all registered missions from the database.
Each mission is shown as a card with its information, image, and creation date.

### `delete_mission.php`

This file deletes a selected mission from the database.
If the mission has an uploaded image, the image file is also removed from the `uploads` folder.

### `styles.css`

This file contains the visual design of the website.
The interface uses dark colors, warm tones, soft lights, and a cinematic space atmosphere inspired by interstellar travel.

### `connection.example.php`

This file shows an example of how the database connection should be configured.

### `riveira_nicolas.sql`

This file contains the SQL structure needed to create the database and the `missions` table.

---

## 🗄️ Database

The project uses a MySQL database with a table called `missions`.

The table stores the following information:

| Column                | Description             |
| --------------------- | ----------------------- |
| `id`                  | Unique mission ID       |
| `astronaut_name`      | Name of the astronaut   |
| `planet`              | Planet or destination   |
| `mission_type`        | Type of mission         |
| `mission_description` | Mission details         |
| `image`               | Uploaded image filename |
| `created_at`          | Automatic creation date |

---

## 💻 How to Run Locally

1. Install **XAMPP**.
2. Start **Apache** and **MySQL**.
3. Place the project folder inside the `htdocs` directory.
4. Open **phpMyAdmin**.
5. Import the `riveira_nicolas.sql` file.
6. Configure the database connection.
7. Open the project in the browser.

Example local URL:

```text
http://localhost/interestellar-php/
```

---

## 🌠 Project Idea

Interestellar PHP was created as a small digital control center for fictional space missions.
The goal is to combine a simple PHP and MySQL structure with a visual style inspired by space, exploration, and cinematic science fiction.

---

## 👨‍🚀 Author

Created by **Nicolás Riveira**.
