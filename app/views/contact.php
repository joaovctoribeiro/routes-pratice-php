<?php $this->layout('master'); ?>

<h1>Contato</h1>

<h2>Você está na página de contato.</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rhoncus mollis neque vitae finibus. Integer congue est fermentum, viverra metus id, imperdiet neque. Nunc sed ultricies augue, non gravida orci. Nulla cursus lectus vehicula molestie dignissim. Nunc bibendum, neque vel vestibulum commodo, sem nulla vulputate risus, sit amet auctor neque metus non ipsum. Vestibulum sagittis metus in rhoncus vulputate. Pellentesque mi urna, lacinia quis accumsan non, tristique eu augue. Integer eget quam at nisi dapibus tincidunt. Sed hendrerit condimentum iaculis. Quisque tristique lobortis mi quis consequat. Duis lobortis lacus eu ante laoreet egestas.</p>

<!-- Testando o recebimento dos dados do formulário -->
<!-- testing receipt of form data -->

<form action="/contact" method="post">
    <input type="text" name="name" id="" placeholder="Nome">
    <input type="text" name="email" id="" placeholder="E-mail">

    <button type="submit">Enviar</button>
</form>