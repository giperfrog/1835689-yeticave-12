<main>
    <?php $classname = (isset($errors)) ? "form--invalid" : ""; ?>
    <form class="form form--add-lot container <?= $classname ?>" action="add.php" method="post" enctype="multipart/form-data">
        <h2>Добавление лота</h2>
        <div class="form__container-two">
            <?php $classname = isset($errors['lot-name']) ? "form__item--invalid" : ""; ?>
            <div class="form__item <?= $classname ?>">
                <label for="lot-name">Наименование <sup>*</sup></label>
                <input id="lot-name" type="text" name="lot-name" value="<?= getPostVal('lot-name'); ?>" placeholder="Введите наименование лота">
                <span class="form__error"><?= $errors['lot-name'] ?></span>
            </div>
            <?php $classname = isset($errors['category']) ? "form__item--invalid" : ""; ?>
            <div class="form__item <?= $classname ?>">
                <label for="category">Категория <sup>*</sup></label>
                <select id="category" name="category">
                    <option>Выберите категорию</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?= $category['id']; ?>" <?= $category['id'] === getPostVal('category') ? 'selected' : '' ?>><?= $category['name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <span class="form__error"><?= $errors['category'] ?></span>
            </div>
        </div>
        <?php $classname = isset($errors['message']) ? "form__item--invalid" : ""; ?>
        <div class="form__item form__item--wide <?= $classname ?>">
            <label for="message">Описание <sup>*</sup></label>
            <textarea id="message" name="message" placeholder="Напишите описание лота"><?= getPostVal('message'); ?></textarea>
            <span class="form__error"><?= $errors['message'] ?></span>
        </div>
        <div class="form__item form__item--file">
            <label>Изображение <sup>*</sup></label>
            <div class="form__input-file">
                <input class="visually-hidden" type="file" name="lot_img" id="lot-img" value="">
                <label for="lot-img">
                    Добавить
                </label>
            </div>
        </div>
        <div class="form__container-three">
            <?php $classname = isset($errors['lot-rate']) ? "form__item--invalid" : ""; ?>
            <div class="form__item form__item--small <?= $classname ?>">
                <label for="lot-rate">Начальная цена <sup>*</sup></label>
                <input id="lot-rate" type="text" name="lot-rate" value="<?= getPostVal('lot-rate'); ?>" placeholder="0">
                <span class="form__error"><?= $errors['lot-rate'] ?></span>
            </div>
            <?php $classname = isset($errors['lot-step']) ? "form__item--invalid" : ""; ?>
            <div class="form__item form__item--small <?= $classname ?>">
                <label for="lot-step">Шаг ставки <sup>*</sup></label>
                <input id="lot-step" type="text" name="lot-step" value="<?= getPostVal('lot-step'); ?>" placeholder="0">
                <span class="form__error"><?= $errors['lot-step'] ?></span>
            </div>
            <?php $classname = isset($errors['lot-date']) ? "form__item--invalid" : ""; ?>
            <div class="form__item <?= $classname ?>">
                <label for="lot-date">Дата окончания торгов <sup>*</sup></label>
                <input class="form__input-date" id="lot-date" type="text" name="lot-date" value="<?= getPostVal('lot-date'); ?>" placeholder="Введите дату в формате ГГГГ-ММ-ДД">
                <span class="form__error"><?= $errors['lot-date'] ?></span>
            </div>
        </div>
        <?php if (isset($errors)) : ?>
            <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
            <ul>
                <?php foreach ($errors as $val) : ?>
                    <li><strong><?= $val; ?>:</strong></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <button type="submit" class="button">Добавить лот</button>
    </form>
</main>
