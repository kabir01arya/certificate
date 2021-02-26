



<html><head><title>script_coders</title> 
<meta name="viewport" content="width=device-width"><link href="/favicon.ico" rel="icon" type="image/x-icon" /> <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre|Laila" rel="stylesheet">



<style> 
a{font-weight:bold;text-decoration:none;}
body,input{text-align:center;letter-spacing:1px;font-family: Laila;}.image-placeholder {

  margin: auto;

  width: 89%;
  max-width: 500px;
  display: block;
  height: 380px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
} .result {

  margin: 0 auto;

  padding: 4em 1em;
  max-width: 40em;
}
.result video, .result img {
  width: calc(100% - 4em);
  margin: 2em;
}
.result .download {
  text-decoration: none;
  display: inline-block;
  padding: 0.5em 1em;
  background: #208bfd;
  border-color: #208bfd;
  border-width: 1px;
  color: #f9f9f9;
  transition: all 500ms ease;
}
.result .download:focus, .result .download:hover {
  background: #208bfd;
  border-color: #f9f9f9;
  cursor: pointer;
  transition: all 500ms ease;
}

hr{border: 0;height: 0.7px;background-image:linear-gradient(to right, red, blue, Green);}input,select{outline:none;}
.text{background-image:linear-gradient(to right, red, blue, red);width: 83%;padding: 8px 20px;margin: 7px 0;display: inline-block; border: 2px solid ;border-radius: 4px; box-sizing: border-box;text-align:center;font-weight:bold;color:black;
}
select{background-image:linear-gradient(to right, blue, gray, blue);width: 60%;padding: 8px 20px;margin: 7px 0;display: inline-block; border: 1px solid ;border-radius: 0px; box-sizing: border-box;text-align:center;font-weight:bold;font-color:Red;color:black;
}
::placeholder{font-weight:bold;color:red;}
.submit{font-weight:bold;width: 45%;background-image:linear-gradient(to right,blue, red, blue);color: white;padding: 14px 20px;margin: 8px 0;border: none;border-radius: 4px;cursor: pointer;}
.submit:hover{background-image:linear-gradient(to right, red, green, red);}

bold{color:linear-gradient(to right, red, blue, red);font-weight:bold;}body{color:#F50057;}
</style>

<font  color-image='linear-gradient(to right, red, green, red)' size='4'><bold>INSTAGRAM <br>REELS AND PHOTOS</bold><hr></font>
<p>DOWNLOADER</p>
</center>

  <main>
  
      <input type="text" value="" placeholder="Paste link here..." />
      <button class="search" onclick="getMedia()">Get</button>
    </header>
    <section class="result">
      <div class="image-placeholder"></div>
      <p> Copy image or video link from Instagram and put it on the field given on the top. <br>&copy;Kabir Arya & &copy;Ayush Arya<br>

                        
    </section>
  </main>
  
  


<script>

const _ = e => document.querySelector(e);
const render = _('.result');
 
 
// create video
const createVideo = data => {
  let v = document.createElement('video');
  v.id = "instavideo";
  v.src = data.content; 
  v.controls = true;
  v.autoplay = true;
 
  // create info
  let info = document.createElement('p');
  info.textContent = "Long press on video for download the content.";
 
  render.innerHTML = ""; 
  render.appendChild(v);
  render.appendChild(info);
};
// create image
const createImg = data => {
  // create image
  let i = document.createElement('img');
  i.id = "instaImg";
  i.src = data.content;
 
  // create info
  let info = document.createElement('p');
  info.textContent = "Long press on photo for download the content.";
 
  render.innerHTML = ""; 
  render.appendChild(i);     
  render.appendChild(info); 
 
};
 
// extract html
const getMedia = () => {
  render.innerHTML = "<div class='image-placeholder'></div>";
  // get input value
  let url = _('input').value;
  if (url) {
    fetch(url).
    then(r => r.text()).
    then(r => {
      // render html
      render.innerHTML = r;
      // wait, find meta and create video or image
      let w = setTimeout(() => {
        let v = _('meta[property="og:video"]');
        if (v) {
          createVideo(v);
        } else {
          let img = _('meta[property="og:image"]');
          if (img) {
            createImg(img);
          } else {
            document.body.innerHTML = body;
            alert('Error extracting Instagram image / video.');
          };
        }
        clearTimeout(w);
      }, 200);
    });
  } else {
    _('input').setAttribute('placeholder', 'Invalid address, use a proper Insagram link');
 
  }
};
</script>