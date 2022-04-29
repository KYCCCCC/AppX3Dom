        <div id="about" style="display:none;">
              <!-- Insert About Contents -->
              <h2 class="h2">update content </h2>
              <div>
                  <form action="index.php?update" method = "post">
                  <table class="table">
                  <?php
                  // print_r($data);
                  for ($i=0 ; $i<=3;$i++){
                  ?>
                    <tr>
                      <td>title <?php echo $i?> :</td><td><input class="form-control" type="text" name="title[]" value = "<?php echo $data[$i]["title"] ?> "></td>
                    </tr>
                    <tr>
                      <td>subTitle <?php echo $i?> :</td><td><input class="form-control" type="text" name="subTitle[]" value = "<?php echo $data[$i]["subTitle"] ?> "></td>
                    </tr>
                    <tr>
                      <td>description <?php echo $i?> :</td><td><textarea class="form-control" type="text" name="description[]" value = "  "><?php echo $data[$i]["description"] ?></textarea>
                      <br/>
                      <br/>
                    </td>
                    </tr>
                  <?php
                  }
                  ?>
                  <tr>
                      <td></td>
                      <td><input type="submit" class = "submit"></td>
                    </tr>
                  </table>
                  </form>
              </div>
          </div>  
