<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

<style>
	
	.footer {
	  width: 100%;
	  background-image: url("./images/homedown.png");
	  background-size: 100% 100%;
	  padding: 20px 0px;
	}
	
	.footer section {
	  width: 20%;
	  padding: 2%;
	  display: inline-block;
	}
	
	.footer img {
	  width: 200px;
	  height: 80px;
	  font-size: 4em;
	}
	
	.footer p {
	  font-size: 12px;
	  color: #fff;
	}
	
	.footer section .title {
	  color: #fff;
	  font-size: 1em;
	}
	
	.footer section .title:before {
	  content: "";
	}
	
	.footer section a {
	  text-decoration: none;
	  color: #fff;
	  font-size: 14px;
	  transition: 0.5s;
	}
	
	.footer section a:hover {
	  color: #a49e59;
	}
	
	.footer section input {
	  width: 70%;
	  border: 0;
	  outline: none;
	  height: 30px;
	  padding: 5px;
	}
	
	.footer section button {
	  width: 50px;
	  height: 40px;
	  padding: 10px 5px;
	  outline: none;
	  border: 0;
	  background: #cccccc;
	  color: #193aab;
	}
	
	.footer section .fa-map-marker,
	.footer section .fa-phone,
	.footer section .fa-envelope {
	  font-size: 23px;
	  margin: 10px;
	  transition: 0.5s;
	}
	
	.footer section i:hover {
	  color: #fff;
	}
	
	.sub-footer {
	  background: #1e1e1e;
	  text-align: center;
	  font-size: 14px;
	  color: gray;
	  padding: 10px 0px;
	}
	@media (max-width: 600px) {
	  .footer section {
		display: block;
		width: 90%;
	  }
	  .footer section:nth-child(2),
	  .footer section:nth-child(3) {
		width: 40%;
		display: inline-block;
		margin: 2%;
	  }
	}
	</style>
	
</head>
<body>
	
<footer>
        <div class="footer">
            <section>
                <p>
                <div class="logo"><a href="index.php"><span style="color: #fff;  font-size:200%;
  font-family: Fredoka One ,  cursive; c">FLIPCARTCLONE</span></a></div>
                </p>
            </section>

            <section>
                <p class="title">INFORMATION</p>
                <div class="">
                    <div class="footer_column">
                        <div class="footer_info">
                            <?php
                            $query = mysqli_query($con, "select * from  tblpage where PageType='contactus'");
                            while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <ul>
                                    <!-- Phone -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="images/phone-call.svg" alt=""></div>
                                        <span>
                                         <p><a href=""><?php echo $row['MobileNumber']; ?></a></p>   
                                        </span>
                                    </li>


                                    <!-- Email -->
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div><img src="images/envelope.svg" alt=""></div>
                                        <span>
                                        <p><a href=""><?php echo $row['Email']; ?></a></p>    
                                        </span>
                                    </li>
                                </ul>
                            <?php } ?>
                        </div>
            </section>

            <section>
                <p class="title">SHORT CUT</p>
                <p><a href="contact.php">Contact Us</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">My Order</a></p>
                <p><a href="#">Site Detailed</a></p>

            </section>

            <section>
                <p class="title">News Letter</p>
                <p><input type="email" placeholder="Email*" style="height:40px; font-size:20px;" required><button type="submit"><i
                            class="fa fa-paper-plane"></i></button></p>
                <p><a title="Address, Country, Pincode"><i class="fa fa-map-marker"></i></a> <a href="#"><i
                            class="fa fa-phone"></i></a> <a href="#"><i class="fa fa-envelope"></i></a></p>
            </section>
        </div>

    </footer>


	
</body>
</html>