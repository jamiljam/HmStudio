<?php include(__DIR__.'/header.html.php') ?>


<div class=" text-center demande jumbotron">
            <h2>POUR TOUTES DEMANDES PROFESIONNELLES</h2>
            <hr class="my-4">
            <h4>Les demandes professionnelles concernent les collaborations,
                les services de mixage et de mastering, les interviews,
                le programme d’affiliation et les partenariats.</h4>
            <br>
            <div class="contact-form">
                <form action="https://formspree.io/f/mgerdbaz" method="POST">
                    <div class="up form-group">
                        <input class="email" type="text" name="email" placeholder="Email">

                        <select class="option" name="subject" id="">
                            <option value="">Demande</option>
                            <option value="">Partenariat</option>
                            <option value="">Interview</option>
                            <option value="">Demande d'affilation</option>
                            <option value="">Demande de mix</option>
                            <option value="">Demande de mastering</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="message" name="message" placeholder="Description de la demande" rows="3"></textarea>
                    </div>
                    <button class="btn" type="submit" name="submit">Envoyer</button>
                </form>
            </div>
            <br>
            <h4>Pour tout problème avec le formulaire de demande, contactez moi par mail :</h4>
            <h4>homemade@studio.com</h4>
        </div>

<?php include __DIR__.'/footer.html.php'; ?>
