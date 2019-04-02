
<div class="container">
    <div class="row py-5">
        <div class="col-4 border py-2">

            <form action="" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="mail_exp">Expéditeur</label>
                    <input type="email" class="form-control" name="mail_exp" id="mail_exp" placeholder="Expéditeur">
                </div>

                <div class="form-group">
                    <label for="mail_dest">Destinataire</label>
                    <input type="email" class="form-control" name="mail_dest" id="mail_dest" placeholder="Destinataire">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                        <label for="fileToUpload">Envoyer un fichier</label>
                        <input type="file" class="btn btn-primary" id="fileToUpload" name="fileToUpload">
                </div>

                <input type="submit" value="Envoyer">

            </form>

        </div>
    </div>
</div>