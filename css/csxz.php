@import url("https://fonts.googleapis.com/css?family=Raleway:300,400");
@import url("https://fonts.googleapis.com/css?family=Montserrat:700");
@import url('https://fonts.googleapis.com/css?family=Allerta');
* {
  transition: 0.4s ease;
}

body{ 
    background-color: #D6ECED;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    font-family: 'Allerta', serif;
    margin=0;
    padding=0;


}
.fixed-nav-bar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  min-height: 100px;
  padding: 0 25px;
  box-sizing: border-box;
  background-color: white;
  box-shadow: 0 0 15px 2px rgba(0,0,0,0.5);
  z-index: 100;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: 0.35s ease;
}
.fixed-nav-bar .logo {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateY(-50%) translateX(-50%);
  text-transform: uppercase;
  color: #000;
  font-size: 28px;
  font-weight: 300;
  cursor: pointer;
  letter-spacing: 20px;
}

.drop-down-container {
  height: 15%;
  width: 90%;
  left: 160%;
  margin-top: 5px;
  transform: translateX(-50%);
  transition: 0.3s ease;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
}
.drop-down-item {
  position: absolute;
  top: 0;
  left: 0;
  right: 8px;
  bottom: 0;
  background-color: white;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
}

.drop-down-item:before {
  content: "";
  align-content: center;
  justify-content: center;
  position: absolute;
  right: -8px;
  height: 100%;
  width: 8px;
  transition: 0.25s ease;
  background: linear-gradient(to left, gray 50%, white 50%);
  background-size: 200% 100%;
  background-position: left;
}
.drop-down-item:hover::before {
  background-position: right;
}
.the-bass {
  position: fixed;
  height: 0px;
  width: 500px;
  right: 0;
  top: 100px;
  background-color: white;
  transition: 0.35s ease, height 0.35s 0.3s ease;
  z-index: 90;
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
}
.the-bass.scrolled {

  top: 60px;
}
.the-bass.dropped {
  height: 90vh;
  padding: 5px 0;
  transition: 0.35s ease;
}
.the-bass.dropped .drop-down-container {
  left: 50%;
}
.the-bass.dropped .drop-down-container:nth-child(1) {
  transition: 0.3s ease, left 0.4s 0.4s ease;
}
.the-bass.dropped .drop-down-container:nth-child(2) {
  transition: 0.3s ease, left 0.4s 0.46s ease;
}
.the-bass.dropped .drop-down-container:nth-child(3) {
  transition: 0.3s ease, left 0.4s 0.52s ease;
}
.the-bass.dropped .drop-down-container:nth-child(4) {
  transition: 0.3s ease, left 0.4s 0.58s ease;
}
.the-bass.dropped .drop-down-container:nth-child(5) {
  transition: 0.3s ease, left 0.4s 0.64s ease;
}
.the-bass.dropped .drop-down-container:nth-child(6) {
  transition: 0.3s ease, left 0.4s 0.7s ease;
}
.menu-button-label {
  position: absolute;
  height: 48px;
  width: 48px;
  top: 50%;
  right: 25px;
  transform: translateY(-50%);
  transition: 0.4s ease;
}
.menu-buttons-label {
  position: absolute;
  height: 48px;
  width: 48px;
  top: 55%;
  left: 25px;
  transform: translateY(-50%);
  transition: 0.4s ease;
}
.menu-button-label .white-bar {
  position: absolute;
  height: 2px;
  width: 66%;
  background-color: #ccc;
  left: 50%;
  transform: translateX(-50%);
  transition: 0.4s ease, width 0.3s ease;
}
.menu-button-label .white-bar:nth-child(1) {
  top: 24%;
}
.menu-button-label .white-bar:nth-child(2),
.menu-button-label .white-bar:nth-child(3) {
  top: 47%;
}
.menu-button-label .white-bar:nth-child(4) {
  top: 71%;
}
#menuButton {
  display: none;
}
#menuButton:checked+ .menu-button-label .white-bar:nth-child(1),
#menuButton:checked+ .menu-button-label .white-bar:nth-child(4) {
  width: 0%;
}
#menuButton:checked+ .menu-button-label .white-bar:nth-child(2) {
  transform: translateX(-50%) rotate(45deg);
}
#menuButton:checked+ .menu-button-label .white-bar:nth-child(3) {
  transform: translateX(-50%) rotate(-45deg);
}
.rela-block {
  display: block;
  position: relative;
  overflow: hidden;
}
.cover-before::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.centrado {      
      position: absolute;
      top: 17%;
      left: 50%;
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-family: 'Allerta', serif;
      font-size: 30px;
      text-align: center;
      color: #000000;
      letter-spacing: 10px;
      font-weight: bond;
}
.perfil1 {
    position: absolute;
    bottom: 5px;
    left: 1790px;

}

.margenbaja {
    position: absolute;
    top: 140%;
    font-weight: bold;


}
.margenabajo{
    position: absolute;
    top: 929px;
}
.p1{
    position: absolute;
    top: 130%;
    left: 1200px;
    font-size: 20px;
    letter-spacing: 5px;
    text-decoration: underline 2px;
}

.p2{
    position: absolute;
    top: 130%;
    left: 520px;
    font-size: 20px;
    letter-spacing: 5px;
    text-decoration: underline 2px;

}
.p3 {
    position: absolute;
    top: 395px;
    left: 81%;
    font-size: 20px;
    letter-spacing: 5px;
    text-decoration: underline 2px;
}
.p4{
    position: absolute;
    top: 395px;
    left: 280px;
    font-size: 20px;
    letter-spacing: 5px;
    text-decoration: underline 2px;
}
.cuadro1{
    position: absolute;
    top: 125%;
    left: 540px;
}
.cuadro2{
    position: absolute;
    top: 350px;
    left: 270px;
}
.cuadro4{
    position: absolute;
    top: 125%;
    left: 1190px;
}

.texto1{
    position: absolute;
    top: 73%;
    left: 49%;
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-family: 'Allerta', serif;
    font-size: 26px;
    text-align: center;
    color: #000000;
    letter-spacing: 2px;
    font-weight: normal;
}
.panda{
    position: absolute;
    left: 77.5%; 
    top: 580px;
}
.mensaje{
    width: 120px;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;

}
.mensaje figure{
    position: relative;
    top: 770px;
    border-radius: 6px;
}
.mensaje figure img{
    width: 100%;
    height: 100%;
    transition: all 500ms ease-out;
}
.mensaje figure .capa{
    position: absolute;
    top: 0%;
    width: 100%;
    height: 100%;
    background: rgba(190,186,227,0.6);
    transition: all 500ms ease-out;
    opacity: 0;
    visibility: hidden;
    text-align: center;
    border-radius: 20px;
}
.mensaje figure:hover > .capa{
    opacity: 1;
    visibility: visible;
}
.mensaje figure:hover > .capa h3{
    margin-top: 40px;
    margin-bottom: 15px;
}
.mensaje figure .capa h3{
    color: #000;
    font-family:Allerta; 
}
footer {
    position: absolute;
    bottom: -25px;
    font-weight: bold;
    background-color: white;
    height: 40px;
    width: 1920px;
    text-align: left;

}
footer .text{
      position: absolute;
      top: 10px;
      left: 10px;
}s