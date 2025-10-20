# 💳 WHMCS Discord Manual Payment Gateway

A **custom payment gateway module** for [WHMCS](https://www.whmcs.com/) developed by **OrynCloud** that allows users to **make manual payments through Discord**.  
This module is perfect for hosting providers or businesses that accept payments verified manually through Discord servers.

---

## 🧾 Features

- 💬 Accept manual payments directly via Discord  
- 🤖 Automatic payment request notifications to a Discord channel or bot  
- 🧠 Customizable message templates  
- ⚙️ Easy to install and configure  
- 🔒 Secure integration with WHMCS payment system  
- 🧍 Works with any Discord bot (manual or automated verification)

---

## 🛠️ Installation

1. Download or clone this repository into your WHMCS installation:
   ```bash
   modules/gateways/discordmanual/
   ```
2. Inside WHMCS admin panel:
   - Go to **Setup → Payments → Payment Gateways**
   - Activate **Discord Manual Payment**
3. Configure your settings:
   - Enter your **Discord Webhook URL**
   - Set **payment instructions**
   - (Optional) Customize Discord message content

---

## ⚙️ Configuration Options

| Setting | Description |
|----------|-------------|
| **Webhook URL** | The Discord webhook used to send payment requests |
| **Message Format** | Customize how payment details are displayed on Discord |
| **Currency** | Select the currency for manual payments |
| **Payment Confirmation** | Option to confirm payments manually after verification |

---

## 🪄 How It Works

1. A user selects **Discord Manual Payment** at checkout.  
2. Payment details are sent to your Discord server through a webhook.  
3. Admin or staff can verify and confirm the payment in WHMCS.  
4. Once confirmed, the invoice is marked **Paid** automatically.

---

## 🧩 Requirements

- WHMCS v8.0 or higher  
- PHP 7.4+  
- A Discord Server & Webhook URL  
- (Optional) A custom Discord bot for enhanced automation  

---

## 🧠 Future Updates

- ✅ Automatic invoice verification via Discord bot  
- ✅ Support for multiple Discord channels  
- 🔄 Add slash commands for admins  
- 🔔 Payment confirmation messages to customers  

---

## 🧑‍💻 Contributing

Want to improve this module? Contributions are welcome!  
1. Fork this repository  
2. Create a new branch (`feature/new-feature`)  
3. Commit your changes  
4. Open a Pull Request  

---

## 📜 License

This project is licensed under the **MIT License**.  
Feel free to use, modify, and share it with credit.

---

## 🌐 Connect with OrynCloud

If you’d like to suggest features, report bugs, or discuss improvements:
- 📫 Create an issue on GitHub
- 💬 Join our Discord (if available)
- ⭐ Star the repo to support the project!

---

**Made with ❤️ by OrynCloud for WHMCS developers and hosting providers**
