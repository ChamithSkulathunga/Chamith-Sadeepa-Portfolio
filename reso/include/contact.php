<section class="contact section" id="contact">
        <h2 class="sectionTitle">Contact</h2>

        <?php
                    if(!empty($_POST ["Send"])){
                        $name = $_POST ["name"];
                        $email = $_POST ["email"];
                        $message = $_POST ["message"];
                        $toEmail = "skchamith14@gmail.com";

                        $mailHeaders = "Name: " . $name .
                        "\r\n Email: " . $email .
                        "\r\n Message: " . $message . "\r\n ";

                        if(mail($toEmail, $name, $mailHeaders)){
                            $messageDisplay = "Your Infomation is Received Successfully. ";
                        }

                    }
         ?>

        <div class="contactContainer bdGrid">
          <form action="" method="post" class="contactForm">
            <input
              type="text"
              placeholder="Name"
              class="contactInput"
              id="name"
              name="name"
            />
            <input
              type="mail"
              placeholder="Email"
              class="contactInput"
              id="email"
              name="email"
            />
            <textarea
              placeholder="Your message"
              id=""
              cols="0"
              rows="10"
              class="contactInput"
              name="message"
            ></textarea>
            <input
              type="submit"
              value="Send"
              class="contactButton button"
              id="message"
              name="Send"
            />
            <?php if(!empty($messageDisplay)) {?>
                 <div class="success">
                  <strong style="color:green;"><?php echo $messageDisplay; ?></strong>
                  </div>
            <?php }?>
          </form>

          <!-- <table class="contactForm">
            <tr>
              <th>Full Name</th>
              <td>: S.K. Chamith Sadeepa Kulathunga</td>
            </tr>
            <tr>
              <th>Address</th>
              <td>: 274/A Bogashandiya, arlaganwila.</td>
            </tr>
            <tr>
              <th>Emai</th>
              <td>: skchamith14@gmail.com</td>
            </tr>
            <tr>
              <th>Mobile</th>
              <td>: 076 7217480</td>
            </tr>
          </table> -->
        </div>
      </section>
