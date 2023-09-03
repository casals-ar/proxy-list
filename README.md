### ☕ Buy me a coffee!  [![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://paypal.me/santicsls)

> With a small donation you will contribute so that I can continue to maintain public projects! 

# 🌐 [proxy.casals.ar](https://proxy.casals.ar)

Project with the purpose of validating an HTTP / HTTPS / SOCKS4 / SOCKS 5 proxy list. 

# ❓ FAQ

### Q: Where do you get the proxies from?

A: Proxies are obtained from different sources, almost all from open source GitHub repositories or other projects that offer their services for free.
1. HTTP:
	- [TheSpeedX's "PROXY-List" repositorie](https://raw.githubusercontent.com/TheSpeedX/PROXY-List/master/http.txt)
2. HTTPS: 
	- [ErcinDedeoglu's "proxies" repositorie](https://raw.githubusercontent.com/ErcinDedeoglu/proxies/main/proxies/https.txt)
3. SOCKS4:
	- [monosans's "proxy-list" repositorie](https://raw.githubusercontent.com/monosans/proxy-list/main/proxies/socks4.txt)
4. SOCKS5:
	- [monosans's "proxy-list" repositorie](https://raw.githubusercontent.com/monosans/proxy-list/main/proxies/socks5.txt)

Do you want add a new source? Create a new commit or contact to my email at [santiago@casals.ar](mailto:santiago@casals.ar).

### Q: How works?

A: The validation process involves establishing a connection to the IP address 1.1.1.1 (Cloudflare) through the proxy. If the connection is successful, the proxy is included in the list and subsequently committed.

### Q: How often is there a commit?

A: 5 minutes. If there are no commits, it is because no valid proxies were found.

### Q: Are proxies removed?

A: Yes, proxies are removed every 24 hours and the verification process starts from scratch.

## 📝 Last update

> 2023-09-03 19:05:01
