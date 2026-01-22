async function createOrder(s,l,q){return labRequest({action:"add",service:s,link:l,quantity:q})}
async function getOrderStatus(o){return labRequest({action:"status",order:o})}