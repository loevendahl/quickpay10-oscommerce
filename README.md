# quickpay10-oscommerce

README for Quickpay Payment module protocol 10 (version 2.0)
Please contact kl@blkom.dk for questions, comments, feature requests and professional support.

MAJOR IMPROVEMENTS IN VERSION 2.0
A. This version supports basic subscription payment and payment links.
B. There is no data posted to Quickpay gateway through client browser. Payments are handled by API server to server communication and reuseable payment links . This means, that this module is independent of user browser and user technology limitations.

C. Merchant can send a reuseable payment link (from order admin) to a customer if a  transaction has been abrupted for some reason.

D. Simplicity. The basic concept of this version is 

1. get order status from API
2. create order in gateway if no order and payment exists
3. create or update reusable payment link to payment window (same order number)
4. handle webshop order in callback according to status from gateway API

E. Payment status records are not added to order history comments. They are output in order admin seperately from an API status log function instead
