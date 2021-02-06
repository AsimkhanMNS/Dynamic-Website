<style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap');

    .navbar {

        background: white;

    }

    .navbar:hover {
        box-shadow: 0px 2px crimson;
    }

    .nav-link {
        color: red;
        font-family: 'Fira Sans', sans-serif;


    }

    .nav-link:hover {
        color: black;
    }

    .navbar-toggler-icon {
        color: red;
    }

    .navbar-nav {
        margin-left: auto;
    }

    #btn {
        padding: 1px 3px;
    }

    @media(max-width:960px) {
        .nav-link {
            margin-left: 20px;
        }

        #btn {
            width: 100%;
            margin-left: 20px;


        }
    }


    /* CONTACT */
    .floating {
        color: red;
        font-family: 'Fira Sans', sans-serif;
        position: relative;
    }

    .floating::before {
        content: '';
        background: crimson;
        position: absolute;
        width: 100px;
        height: 3px;
        margin-top: 22px;
        border-radius: 20px 20px;

    }

    .form-control textarea {
        resize: none;

    }

    .btn {
        width: 100%;
    }

    #ims {
        text-align: center;
    }

    .ims {
        width: 75vw;
    }

    #ims,
    h2 {
        font-family: 'Fira Sans', sans-serif;
        font-size: 30px;
        font-weight: 600;


    }

    .form-control {
        background: white;
    }


    @media(max-width:960px) {
        .btn {
            width: auto;
        }
    }

    /* LOGIN */

    /* HMOE */

    .ima h3 {
        font-family: 'Fira Sans', sans-serif;
        font-weight: 700;
        position: relative;
    }

    .ima h3::before {
        content: '';
        position: absolute;
        background: crimson;
        width: 200px;
        height: 3px;
        margin-top: 32px;
        border-radius: 10px 10px;
    }

    /* FOOTER */
    .row {
        width: 100%;
    }

    .footer {
        background: #333;
    }

    .footer h5 {
        font-family: 'Fira Sans', sans-serif;
        color: white;
        position: relative;
        margin-left: 10px;
    }

    .footer h5::before {
        content: '';
        position: absolute;
        width: 150px;
        height: 3px;
        background: crimson;
        margin-top: 20px;
        border-radius: 5px 5px;

    }

    #f a {
        text-decoration: none;
        color: white;

    }

    #f a:hover {
        text-decoration: none;
        color: crimson;

    }

    #f li {
        padding-right: 20px;
        margin-left: 10px;
        text-align: center;
    }

    .p {
        color: white;
        font-family: 'Fira Sans', sans-serif;
        margin-left: 10px;
        margin-top: 10px;
    }

    .p:hover {
        color: crimson;
        font-family: 'Fira Sans', sans-serif;

    }

    .e {
        color: white;
        font-family: 'Fira Sans', sans-serif;
        margin-top: 10px;
        margin-left: 10px;
    }

    .e:hover {
        color: crimson;
        font-family: 'Fira Sans', sans-serif;
    }

    hr {
        color: white;
    }

    footer,
    span {
        text-align: center;
        color: white;
    }

    .ft a {
        color: white;
        font-family: 'Fira Sans', sans-serif;
        text-decoration: none;
    }

    .ft a:hover {
        color: crimson;
        font-family: 'Fira Sans', sans-serif;
    }
    .imq img{
        width: 100%;
        
    }
    .per{
        display: flex;
       color: black;
    }
   
    @media(max-width:960px){
        .vde{
            width: 100%;
            height: 200px;
            margin-top: 10px;
        }
    }
</style>