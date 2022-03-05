 <!-- Button trigger modal -->
 <a href="#exampleModal" class="btn btn-primary" data-toggle="modal">
  Launch demo modal</a>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="http://localhost/php_examen/traitement.php" method="POST">
        <label>Destinataire</label>
        <select class="form-select" name="destinataire">
            <option selected>Selectionnez un destinataire</option>
            <?php
                require_once 'logindb.php';
                $email = $_SESSION['login'];
                $liste = listeUser($email)->fetchAll();
                foreach ($liste as $key => $value) {
                    echo "<option>$value[2]</option>";
                }
            ?>
            
        </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Objet</label>
                <input type="text" class="form-control" name="objet" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Message</label>
                <textarea type="text" class="form-control rounded-0" name="contenu" rows="3"></textarea>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="" name="save" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
  </div>
</div>
    <p></p>
    <table class="table" style="width: 50%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>