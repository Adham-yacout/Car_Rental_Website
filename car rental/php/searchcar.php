*, *:after, *:before {
    box-sizing: border-box;
}
*{
    margin: 0;
    padding: 0;
    
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
    list-style: none;
    text-decoration: none;
    
    }
body {
    font-family: "Inter", sans-serif;
    color: #f2f208;
  
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("https://wallpaperaccess.com/full/1554143.jpg")

}
form {
    display: grid;
    flex-wrap: wrap;
    flex-direction: column;
}
label {
    display: flex;
    cursor: pointer;
    font-weight: 500;
    position: relative;
    overflow: hidden;
    margin-bottom: 0.375em;

}
label input {
    position: absolute;
    left: -9999px;
}
label input:checked + span {
    background-color: #000;
}
label input:checked + span:before {
    box-shadow: inset 0 0 0 0.4375em #ffff00;
}
label span {
    display: flex;
    align-items: center;
    padding: 0.375em 0.75em 0.375em 0.375em;
    border-radius: 99em;
    transition: 0.25s ease;
}
label span:hover {
    background-color: #000;
}
label span:before {
    display: flex;
    flex-shrink: 0;
    content: "";
    background-color: #000;
    width: 1.5em;
    height: 1.5em;
    border-radius: 50%;
    margin-right: 0.375em;
    transition: 0.25s ease;
    box-shadow: inset 0 0 0 0.125em #999900;
}
.container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}
table{
    margin-left: auto;
    margin-right: auto;
     }
.submit-btn {
    display: inline-block;
    background-color: #000;
    color: #999900;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 16px;
    padding: 8px 16px;
    border: none;
    width:200px;
    cursor: pointer;
  }
