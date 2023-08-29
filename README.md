
# 🚀 https://casals.ar

Project with the purpose of validating an HTTP / HTTPS proxy list. 

# FAQ

### Where do you get the proxies from?

Proxies are obtained from different sources, almost all from open source GitHub repositories or other projects that offer their services for free.

### How works?

The validation process involves establishing a connection to the IP address http://1.1.1.1 (Cloudflare) through the proxy. If the connection is successful, the proxy is included in the list and subsequently committed.

### How often is there a commit?

5 minutes. If there are no commits, it is because no valid proxies were found.

### Are proxies removed?

Yes, proxies are removed every 24 hours and the verification process starts from scratch.