const http = require('http');
const fs = require('fs');
const server = createServer((req,res) =>{
const url = req.url;
if(url === '/')
{
    res.write('<html><head></head><body>');
        res.write('<form method="POST" action="/message"><input type="text" name="text"><button type="submit">submit</button></form>');
        res.write('</body></html>');
        return res.end();
}


if(url ==='/message' && req.method === 'POST')
{
    fs.writeFileSync('message.txt','hellow test');
    res.statusCode = 302;
    res.setHeader('Content-type','text/html');
    res.setHeader('location','/');
    res.write('<h1>message recive</h1>');
    return res.end();
}

res.write('<html><head></head><body>');
        res.write('<h1>hello</h1');
        res.write('</body></html>');
        return res.end();

});
server.listen(3000);