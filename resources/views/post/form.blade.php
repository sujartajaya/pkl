  @extends('layout.app')
    @section('content')  
        <div class="form-portion bg-stone-100 sm:w-[80%] w-[90%] mx-auto">
            <form class="p-5 mt-5">
                <div class="md:p-5 p-1 sm:mt-1 mt-1">
                    <div class="md:mt-1 mt-2">
                        <label for="subject" class="text-xl">Title : </label><br>
                        <input type="text" name="title" placeholder="Mention your area of concern"
                            class=" w-[100%] px-4 py-2 mt-1 rounded-xl">
                    </div>
                    <div class="md:mt-1 mt-2">
                        <label for="category" class="text-xl">Category : </label><br>
                        <select id="category" name="category" class=" w-[100%] px-4 py-2 mt-1 rounded-xl">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <label for="subject" class="text-xl">Questions / Message : </label><br>
                        <textarea name="message" rows="5" placeholder="Write your message here"
                            class="w-[100%] px-4 py-2 rounded-xl appearance-none text-heading text-md"
                            autoComplete="off" spellCheck="false">
                        </textarea>
                    </div>
                </div>
                <div class="btn mt-2 w-[100%] bg-transparent flex items-center">
                    <button type="submit"
                        class="px-4 py-2 mx-auto rounded-xl text-center text-xl bg-black text-white hover:text-black hover:bg-white hover:font-bold hover:shadow-xl">Send
                        Message</button>
                </div>
            </form>
        </div>
@endsection
