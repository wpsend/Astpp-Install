🚀 ASTPP Auto Installer

One‑line automated installer for ASTPP Billing System with FreeSWITCH on Debian 11.

This installer is designed to help you set up ASTPP with FreeSWITCH on a fresh Debian 11 server with minimal effort.

✅ Features

One-command installation

Automatic dependency setup

Optimized for ASTPP + FreeSWITCH

Fresh server friendly

Beginner friendly

🖥 Supported OS

Debian 11 (64‑bit)

Root access required

⚡ Quick Install (Recommended)

Run the following command as root:

```bash
bash <(wget -qO- https://raw.githubusercontent.com/firozsarkar/Astpp-Install/refs/heads/main/rb_install.sh) -y
```

This single command will:

Download the installer

Execute automatically

Install ASTPP & required components

🔐 Root Access

If you are not logged in as root:
```bash
sudo -i
```

Then run the install command again.

⚠️ Important Notes

Recommended to use a fresh Debian 11 server

Installation may take several minutes

Do not close SSH session during install

Server reboot may be required after installation

🛠 Troubleshooting

If installation fails, rerun the installer with logging enabled:

```bash
bash <(wget -qO- https://raw.githubusercontent.com/firozsarkar/Astpp-Install/refs/heads/main/rb_install.sh) | tee install.log
```

Then check install.log for any errors.

📌 Security Notice

Always review scripts before running on production servers

Never run unknown scripts without understanding the contents

✅ Single-line SSL Install Command 
```bash
bash <(wget -qO- https://raw.githubusercontent.com/firozsarkar/Astpp-Install/refs/heads/main/ssl.sh) yourdomain.com
```
👤 Author

Firoz Sarkar
GitHub: https://github.com/firozsarkar

Website: https://hostserverbd.com

⭐ Support

If this project helps you, please give it a ⭐ on GitHub!

📚 Additional Notes

This installer is designed for fresh servers only.

Make sure port 80 and 443 are open for SSL setup (if applicable).

The script automatically installs all dependencies required by ASTPP & FreeSWITCH.

You can monitor progress in your SSH terminal.

💡 Tip: Save your admin credentials and database info after installation for future reference.
