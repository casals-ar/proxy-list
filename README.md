
# proxy.casals.ar

Project with the purpose of validating an HTTP / HTTPS proxy list. 

# FAQ

### Where do you get the proxies from?

Proxies are obtained from different sources, almost all from open source GitHub repositories or other projects that offer their services for free.

### How works?

The validation process involves establishing a connection to the IP address http://1.1.1.1 (Cloudflare) through the proxy. If the connection is successful, the proxy is included in the list and subsequently committed.

### How often is there a commit?

5 minutes. If there are no commits, it is because no valid proxies were found.

# Badges

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://choosealicense.com/licenses/mit/)

[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)

[![AGPL License](https://img.shields.io/badge/license-AGPL-blue.svg)](http://www.gnu.org/licenses/agpl-3.0)

