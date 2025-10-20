# 💳 WHMCS Discord Manual Payment Gateway

A **simple custom payment gateway module** for [WHMCS](https://www.whmcs.com/) developed by **OrynCloud**.  
This module allows users to **select Discord Manual Payment** at checkout, letting admins and users complete transactions manually via Discord.

---

## 🧾 Overview

This gateway is designed for hosting providers or communities that manage payments **manually through Discord**.  
It does **not** automatically verify or process payments — instead, it provides an easy way to show a custom payment method in WHMCS.

---

## 🧠 How It Works

1. The client selects **Discord Manual Payment** during checkout.  
2. The invoice will show instructions for completing the payment (such as contacting you on Discord).  
3. The admin and user then coordinate manually on Discord.  
4. Once payment is verified by the admin, the invoice can be marked **Paid** from the WHMCS admin area.

---

## ⚙️ Features

- 💬 Adds a **manual payment option** in WHMCS checkout.  
- 🔧 Fully configurable payment instructions.  
- 🧾 Clean and easy setup — no code modifications needed.  
- 🤝 Ideal for Discord-based communities and manual payment handling.  
- 💻 100% WHMCS-compatible.

---

## 🛠️ Installation

1. Upload or clone the repository into your WHMCS directory:
   ```bash
   modules/gateways/discordmanual/
   ```
2. In the WHMCS admin panel:
   - Navigate to **Setup → Payments → Payment Gateways**
   - Find and **activate "Discord Manual Payment"**
3. Configure the settings:
   - Add your **Discord contact instructions**
   - Save changes

---

## ⚙️ Configuration Options

| Setting | Description |
|----------|-------------|
| **Payment Instructions** | Message shown on the invoice page (e.g., “Contact us on Discord at `@yourserver` to complete your payment.”) |
| **Currency** | Choose your preferred currency for invoices. |

---

## 🧩 Requirements

- WHMCS v8.0 or higher  
- PHP 7.4+  
- A Discord Server (for manual communication)  

---

## 🧑‍💻 Contributing

Want to help improve this project?  
1. Fork this repository  
2. Create a new branch (`feature/new-feature`)  
3. Commit your changes  
4. Open a Pull Request  

---

## 📜 License

This project is licensed under the **MIT License**.  
You can freely use and modify it with proper credit.

---

## 🌐 Connect with OrynCloud

If you have ideas, bug reports, or improvement suggestions:
- 📫 Create an issue on GitHub
- 💬 Join our Discord (if available)
- ⭐ Star the repo to support the project!

---

**Made with ❤️ by OrynCloud for WHMCS users and hosting providers**
