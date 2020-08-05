<div class="container-fluid mt-2">
    <form action="">
        <div class="form-group row">

            <!-- Список языков для сдачи -->
            <div class="col-12 p-0">
                <select class="custom-select bg-code text-light">
                    <!-- Тут по идее список должен формироваться через php -->
                    <!--Зачем здесь PHP если список будет фиксированный?-->
                    <option value="C++" selected >C++</option>
                    <option value="Java">Java</option>
                    <option value="C">C</option>
                    <option value="C#">C#</option>
                </select>
            </div>

            <!-- Поле для вставки кода-->
            <div class="col-12 p-0">
                <textarea class="col-12 bg-code text-light border-0" name="" id="" cols="30" rows="10" placeholder="Введите код здесь или отправьте файл, содержащий решение задачи."></textarea>
            </div>

            <!-- Возможность выбрать файл для сдачи-->
            <div class="custom-file col-lg-3 col-md-4 col">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Выберите файл</label>
            </div>

            <!-- Кнопка триггер -->
            <div class="col">
                <button class="btn text-light bg-code">Отправить</button>
            </div>

        </div>
        
        
    </form>
    
</div>