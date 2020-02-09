
const http = require('http');
// const http1 = require('./http');

// create a server
const server = http.createServer((req,res) => { 
    // console.log(req.url,req.method, req.headers);
    // process.exit();
    // res.write('<html><head><title>hellow</title></head><body><h1>hello world</h1></body></html');
    // res.end();
    // console.log(req.url);
    
    if(req.url === '/')
    {
        // res.setHeader('Content-Type','text/html');
        // res.write('<html><head><title>hellow</title></head><body><h1>hello world</h1></body></html');
        res.write('<html><head></head><body>');
        res.write('<form method="POST" action="/message"><input type="text" name="text"><button type="submit">submit</button></form>');
        res.write('</body></html>');
        return res.end();

    // }else{
    //     res.write('<html><head><title>hellow</title></head><body><h1>hello test</h1></body></html');
    // res.end();
}
    if(req.url === '/message' && req.method === 'POST')
    {
        res.setHeader('Content-type','text/html');
        res.write('message');
        return res.end();
    }
  
        res.write('not submit');
        return res.end();
    

    

});
server.listen(3000);