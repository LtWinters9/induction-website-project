
function getArticle() {
    var disttobottom=getDocHeight()-(getWinHeight()+getScrollPosition());
    if(disttobottom<=20){ // User has scrolled to bottom
        var main=document.getElementById("main");
        var lastchild=main.children.length-1;
        var timeelements=main.children[lastchild].getElementsByTagName("time");
        var blogpostdate=timeelements[0].getAttribute("datetime");
        console.log(blogpostdate);
        // create an XMLHTTPRequest
        var XHR=createXHR();
        XHR.open("POST","/~15011406/Induction/php/getarticle.php",true);

        XHR.onreadystatechange = (function() {
            // IE8 requires readyState as separate check as status does
            // not exist until readyState==4
            if(XHR.readyState==4) {
                if(XHR.status==200) { // Two stage status check for IE8 support
                    // Get json array returned
                    var responsedata=JSON.parse(XHR.responseText)[0];
                    console.log(responsedata);
                    // Will be 0 if there are no more articles
                    if(parseInt(responsedata.mainblogid)!=0 && responsedata.mainblogid) {
                        // create new article
                        var newarticle=document.createElement("article");
                        newarticle.setAttribute("id","a"+responsedata.mainblogid);
                        main.appendChild(newarticle);
                        // populate new article with content
                        newarticlestr="<h1>"+responsedata.title+"</h1><p>"+responsedata.blogtext+"</p><footer><p>Posted on <time datetime='"+responsedata.blogtime+"'>"+responsedata.blogtime+" by <em>"+responsedata.forename+"</em></p></footer>";
                        newarticle.innerHTML=newarticlestr;
                        if((responsedata.currentuser.userid==responsedata.blogposter && responsedata.currentuser.userlevel>1)|| responsedata.currentuser.userlevel>2) {
                            var deletelink=document.createElement("p");
                            deletelink.innerHTML="<a href='deletearticle.php?aID="+responsedata.mainblogid+"' id='db"+responsedata.mainblogid+"'>Delete Post</a>";
                            newarticle.appendChild(deletelink);
                        }

                    }
                }else if(XHR.status>=400) {
                    alert("Could not request data");
                }
            }
        });
        // Send request
        XHR.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        XHR.send("blogpostdate="+encodeURIComponent(blogpostdate));
    }
}

function prepareArticle() {
    var checkPosition = setInterval(getArticle,1000);

}
