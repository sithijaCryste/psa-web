function loginProcess() {
    var useremail = document.getElementById('useremail');
    var userpassword = document.getElementById('userpassword');
    var remember = document.getElementById('remember');

    var form = new FormData();
    form.append('useremail', useremail.value);
    form.append('userpassword', userpassword.value);
    form.append('remember', remember.checked); // Use checked instead of value for checkbox

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if (response == "success"){
                alert("Login Success");
                window.location.href = "admin_index.php";
            }else{
                alert(response);
            }
        }
    };

    request.open("POST", "admin-loginProcess.php", true);
    request.send(form);
}

function galleryAddProcess() {
    var title = document.getElementById('inputGalleryTitle');
    var date = document.getElementById('inputGalleryDate');
    var ytURL = document.getElementById('ytURL');

    var form = new FormData();
    form.append('title', title.value);
    form.append('date', date.value);
    form.append('ytURL', ytURL.value); // Use checked instead of value for checkbox

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if (response == "success"){
                alert("Gallery Add Success");
                window.location.reload();
            }else{
                alert(response);
            }
        }
    };

    request.open("POST", "gallery-addProcess.php", true);
    request.send(form);
}

 // 1. This code loads the IFrame Player API code asynchronously.
 document.addEventListener('DOMContentLoaded', function() {
    const player = document.getElementById('player');
    const thumbnailContainers = document.querySelectorAll('.thumbnail-container');

    // Function to load video into the player
    function loadVideo(videoID) {
        if (!videoID) return;
        
        const iframe = document.createElement('iframe');
        iframe.src = `https://www.youtube.com/embed/${videoID}?autoplay=1`;
        iframe.width = '100%';
        iframe.height = '315';
        iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        player.innerHTML = ''; // Clear existing content
        player.appendChild(iframe);
    }

    // Display the first video by default
    if (thumbnailContainers.length > 0) {
        const firstVideoID = thumbnailContainers[0].getAttribute('data-video');
        loadVideo(firstVideoID);
    }

    // Event listener for video thumbnail clicks
    document.querySelectorAll('.ytBtn').forEach(button => {
        button.addEventListener('click', function() {
            const videoID = this.getAttribute('data-video');
            loadVideo(videoID);
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.thumbnail-container').forEach(function(container) {
        // Get the video ID from the data-video attribute
        var videoId = container.getAttribute('data-video');
        console.log("Retrieved video ID:", videoId); // Debugging line
        
        if (videoId) {
            // Construct the thumbnail URL
            var thumbnailUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
            console.log("Thumbnail URL:", thumbnailUrl); // Debugging line
            
            // Set the background image style
            container.style.backgroundImage = `url(${thumbnailUrl})`;
            container.style.backgroundSize = 'cover'; // Ensure the image covers the container
            container.style.backgroundPosition = 'center'; // Center the image
            container.style.width = '100%'; // Set width if necessary
            container.style.height = '200'; // Set height if necessary
            container.style.display = 'flex'; // Flexbox to center content
            container.style.alignItems = 'center'; // Center vertically
            container.style.justifyContent = 'center'; // Center horizontally
        } else {
            console.error('Video ID not found in data-video attribute');
        }
    });
});

function galleryUpdateProcess(){
    var title = document.getElementById('updateGalleryTitle');
    var date = document.getElementById('updateGalleryDate');
    var ytURL = document.getElementById('updateytURL');
    var id = document.getElementById('uid');

    var form = new FormData();
    form.append('title', title.value);
    form.append('date', date.value);
    form.append('ytURL', ytURL.value);
    form.append('id', id.value); 

    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if (request.readyState == 4 && request.status == 200) {
            var response = request.responseText;
            if (response == "success"){
                alert("Gallery Update Success");
                window.location.reload();
            }else{
                alert(response);
            }
        }
    };

    request.open("POST", "gallery-updateProcess.php", true);
    request.send(form);
}

function removeGallery(x){
    if (confirm("Are you sure deleting this?")) {
        var f = new FormData();
        f.append("g", x);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                alert(response);
                window.location.reload();

            }
        }

        request.open("POST", "gallery-deleteProcess.php", true);
        request.send(f);

    }
}

function addNews(){
    var title = document.getElementById('NewsTitle');
    var content = document.getElementById('NewsDescription');
    var date = document.getElementById('NewsDate');
    var main = document.getElementById('mainimg');
    var second = document.getElementById('SecondImage');
    var third = document.getElementById('ThirdImage');
    var titleSi = document.getElementById('NewsTitleSi');
    var contentSi = document.getElementById('NewsDescriptionSi');;
    var titleTa = document.getElementById('NewsTitleTa');
    var contentTa = document.getElementById('NewsDescriptionTa');

    var form = new FormData();
    form.append('title',title.value);
    form.append('content',content.value);
    form.append('titleTa',titleTa.value);
    form.append('contentTa',contentTa.value);
    form.append('titleSi',titleSi.value);
    form.append('contentSi',contentSi.value);
    form.append('date',date.value);
    form.append('main',main.files[0]);
    form.append('second',second.files[0]);
    form.append('third',third.files[0]);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if (response == "success"){
                alert(response);
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "news-addProcess.php", true);
    request.send(form);
    
}

function cancel(){
    window.location.reload();
}

function updateNews(){
    var id = document.getElementById('nId');
    var title = document.getElementById('uNewsTitle');
    var content = document.getElementById('uNewsDescription');
    var date = document.getElementById('uNewsDate');
    var main = document.getElementById('umainimg');
    var second = document.getElementById('uSecondImage');
    var third = document.getElementById('uThirdImage');
    var titleSi = document.getElementById('uNewsTitleSi');
    var contentSi = document.getElementById('uNewsDescriptionSi');;
    var titleTa = document.getElementById('uNewsTitleTa');
    var contentTa = document.getElementById('uNewsDescriptionTa');
  

    var form = new FormData();
    form.append('id',id.value);
    form.append('title',title.value);
    form.append('content',content.value);
    form.append('titleTa',titleTa.value);
    form.append('contentTa',contentTa.value);
    form.append('titleSi',titleSi.value);
    form.append('contentSi',contentSi.value);
    form.append('date',date.value);
    form.append('main',main.files[0]);
    form.append('second',second.files[0]);
    form.append('third',third.files[0]);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if (response == "success"){
                alert(response);
                window.location.reload();
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "news-updateProcess.php", true);
    request.send(form);
    
}

function newsDelete(x){
    if (confirm("Are you sure deleting this?")) {
        var f = new FormData();
        f.append("n", x);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                alert(response);
                window.location.reload();

            }
        }

        request.open("POST", "news-deleteProcess.php", true);
        request.send(f);

    }
}

function addNotice() {
    var noticeURL = document.getElementById('NoticeLink');
    var NoticeImg = document.getElementById('NoticeImg');

    var form = new FormData();

    form.append('noticeURL',noticeURL.value);
    form.append('image',NoticeImg.files[0]);
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if(response == "success"){
                alert(response);
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "notice-addProcess.php", true);
    request.send(form);

}

function updateNotice(){
    var noticeURL = document.getElementById('uNoticeLink');
    var NoticeImg = document.getElementById('uNoticeImg');
    var noticeId = document.getElementById('noticeId');

    var form = new FormData();

    form.append('id',noticeId.value);
    form.append('noticeURL',noticeURL.value);
    form.append('image',NoticeImg.files[0]);
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if(response == "success"){
                alert(response);
                window.location.reload();
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "notice-updateProcess.php", true);
    request.send(form);

}

function noticeDelete(x){
    if (confirm("Are you sure deleting this?")) {
        var f = new FormData();
        f.append("n", x);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                alert(response);
                window.location.reload();

            }
        }

        request.open("POST", "notice-deleteProcess.php", true);
        request.send(f);

    }
}

function categoryregister() {
    //   alert("ok");
    var addnewcategory = document.getElementById("addnewcategory");
    var addnewcategoryS = document.getElementById("addnewcategoryS");
    var addnewcategoryT = document.getElementById("addnewcategoryT");
    var addnewcatIcon = document.getElementById("addnewcatIcon");
    // alert(cat.value);

    var form = new FormData();
    form.append("c", addnewcategory.value);
    form.append("cs", addnewcategoryS.value);
    form.append("ct", addnewcategoryT.value);
    form.append("i", addnewcatIcon.files[0]);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
        if (request.readyState == 4 & request.status == 200) {
            var response = request.responseText;

            alert(response);
        }
    };

    request.open("POST", "category-addProcess.php", true);
    request.send(form);
}

function docAddProcess(){
    var inputDocTitle = document.getElementById('inputDocTitle');
    var inputDocTitleSi = document.getElementById('inputDocTitleSi');
    var inputDocTitleTa = document.getElementById('inputDocTitleTa');
    var cat = document.getElementById('cat');
    var docFile = document.getElementById('docFile');
    var docFileTa = document.getElementById('docFileTa');

    var form = new FormData();

    form.append('inputDocTitle',inputDocTitle.value);
    form.append('inputDocTitleSi',inputDocTitleSi.value);
    form.append('inputDocTitleTa',inputDocTitleTa.value);
    form.append('cat',cat.value);
    form.append('docFile',docFile.files[0]);
    form.append('docFile2',docFileTa.files[0]);
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if(response == "success"){
                alert(response);
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "document-addProcess.php", true);
    request.send(form);

}

function docUpdateProcess(){
    var inputDocTitle = document.getElementById('uinputDocTitle');
    var inputDocTitleSi = document.getElementById('uinputDocTitleSi');
    var inputDocTitleTa = document.getElementById('uinputDocTitleTa');
    var cat = document.getElementById('ucat');
    var docFile = document.getElementById('udocFile');
    var docFile2 = document.getElementById('udocFileTa');
    var doID = document.getElementById('doID');

    var form = new FormData();

    form.append('inputDocTitle',inputDocTitle.value);
    form.append('inputDocTitleSi',inputDocTitleSi.value);
    form.append('inputDocTitleTa',inputDocTitleTa.value);
    form.append('doID',doID.value);
    form.append('cat',cat.value);
    form.append('docFile',docFile.files[0]);
    form.append('docFile2',docFile2.files[0]);
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = function(){
        if(request.readyState == 4 & request.status == 200){
            var response = request.responseText;
            if(response == "success"){
                alert(response);
                window.location.reload();
            }else{
                alert(response);
            }
        }
    }
    request.open("POST", "document-updateProcess.php", true);
    request.send(form);

}

function removeDoc(d){
    if (confirm("Are you sure deleting this?")) {
        var f = new FormData();
        f.append("d", d);

        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (request.readyState == 4 & request.status == 200) {
                var response = request.responseText;
                alert(response);
                window.location.reload();

            }
        }

        request.open("POST", "document-deleteProcess.php", true);
        request.send(f);

    }
}


function changeStatus(x) {
// alert(x);
    var product_id = x;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Pinned" || t == "Unpinned") {
                window.location.reload();
            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "changeStatusProcess.php?p=" + product_id, true);
    r.send();

}
 function changeNewsStatus(x){
    // alert(x);
    var news_id = x;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Pinned" || t == "Unpinned") {
                window.location.reload();
            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "changeNewsStatusProcess.php?n=" + news_id, true);
    r.send();

 }