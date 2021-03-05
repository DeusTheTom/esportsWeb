* {
  padding: 0;
  margin: 0;
}


body {
  height: 100%;
  width: 100vw;

  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 70px 2fr 1fr;


}

p, h1, a {
  font-family: Arial, Helvetica, sans-serif;
}











.navbar {
  display: grid;
 background: #1e1e1e;
}

.navbar ul{
  width: 100%;
  height: 100%;

  display: grid;
  list-style-type: none;

  grid-template-columns: 15% 1fr 1fr 1fr 15%;
  grid-template-rows: 1fr;

}

.navbar ul li{
}

.navbar ul li a{
  display: flex;
  text-decoration: none;
  color: ghostwhite;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;

}



























.content {
  background: #111111;
  color: ghostwhite;
  display: flex;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  border-right: 1px solid ghostwhite;
}

.content .start{
  display:grid;
  grid-template-rows: 1fr 1fr;

}

.content .start img{
  text-decoration: none;
  color: ghostwhite;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content .start a{
  text-decoration: none;
  color: ghostwhite;
  display: flex;
  justify-content: center;
  align-items: center;
}








































footer {

  background: #1e1e1e;
  border-top: 1px solid ghostwhite;

  display: grid;
  grid-template-columns: 1fr;
  grid-template-rows: 1fr 1fr 50px;
}

footer .footer {
}







div.about{
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: 30% 1fr;
  border-bottom: 1px solid ghostwhite;
}

div.about h1{
  color: ghostwhite;
  display: flex;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
  border-right: 1px solid ghostwhite;
}

div.about p{
  color: ghostwhite;
  padding: 20px;
}











div.contacts{
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: 1fr;
  border-bottom: 1px solid ghostwhite;
}

div.contacts ul {
  display: grid;
  list-style-type: none;

  grid-template-rows: 1fr 1fr 1fr;
}

div.contacts ul li a{
  display: flex;
  text-decoration: none;
  color: ghostwhite;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
}







div.social-media{
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: 1fr 1fr 1fr 1fr;
}

div.social-media a{
  text-decoration: none;
  color: ghostwhite;
  display: flex;
  height: 100%;
  width: 100%;
  justify-content: center;
  align-items: center;
}
















@media only screen and (min-width: 768px) {

  footer {

    background: #1e1e1e;

    display: grid;
    grid-template-columns: 1fr 1fr 50px;
    grid-template-rows: 1fr;
  }




  div.about{
    display: grid;
    grid-template-rows: 30% 1fr;
    grid-template-columns: 1fr;
    border-right: 1px solid ghostwhite;
  }

  div.about h1{
    color: ghostwhite;
    display: flex;
    height: 100%;
    width: 100%;
    justify-content: center;
    align-items: center;
    border: none;

  }

  div.about p{
    color: ghostwhite;
    display: flex;
    justify-content: center;
    align-items: center;

    text-align: center;
  }




  div.social-media{
    display: grid;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    grid-template-columns: 1fr;
  }

  div.social-media a{
    text-decoration: none;
    color: ghostwhite;
    display: flex;
    height: 100%;
    width: 100%;
    justify-content: center;
    align-items: center;
  }

}
