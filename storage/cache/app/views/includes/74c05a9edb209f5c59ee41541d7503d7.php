<article style="text-align: center;">
    <h2>Свяжитесь со мной</h2>
    <p class="text__pretty">Расскажите о своих пожеланиях, и я с вами свяжусь в течение двух часов для назначения встречи</p>
    <form action="<?= route('home') ;?>" method="POST" enctype="multipart/form-data">
        <div style="width: 50%; margin: 0 auto;">
            <div class="">
                <label for="username"></label>
                <input type="text" id="username" name="username" value="" placeholder="Иванов Иван Иванович" class="form-control">
            </div>
            <div class="">
                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" value="" placeholder="+7 900 000-00-00" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment"></label>
                <textarea name="comment"
                          id="comment"
                          cols="30" rows="10"
                          placeholder="Comment"
                          class="form-control"
                          style="resize: none;"
                ></textarea>
            </div>
            <button type="submit" class="bg_red_pretty btn__send__me">Отправить</button>
        </div>
    </form>
</article>