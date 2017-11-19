<ul>
    <?php
    require_once('./common/DBConnect.php');

    try {
        $SQL = "SELECT * FROM wsk_media";
        $STH = $DBH->query($SQL);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $html = '';
        while ($rivi = $STH->fetch()) {
            $html .= '<li>
                  <figure>
                      <a href="img/original/'.$rivi->mediaUrl.'"><img src="img/thumbs/'.$rivi->mediaThumb.'"></a>
                      <figcaption>
                          <h3>'.$rivi->mediaTitle.'</h3>
                      </figcaption>
                  </figure>
              </li>';
        }
        echo $html;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    ?>
</ul>