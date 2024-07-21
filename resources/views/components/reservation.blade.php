<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->
<script src="https://kit.fontawesome.com/fe98ae329c.js" crossorigin="anonymous"></script>
<section class="bg-gray-100" id="reservation">
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
        <div class="lg:col-span-2 lg:py-12">
          <p class="max-w-xl text-lg text-black">
            Book Your Table Now and Enjoy an Unforgettable Culinary Experience!
            Don't let the opportunity for a special dining experience slip away. By reserving a table at our restaurant, you ensure yourself the best service and an extraordinary culinary experience. Enjoy our delicious dishes without worrying about running out of space, especially during peak hours.
            
          </p>
  
          <div class="mt-8">
            <a href="#" class="text-2xl font-bold text-pink-600"> 0892 7291 829
            </a>
  
            <address class="mt-2 not-italic text-black">Universitas Indonesia, Jl. Prof. DR. G.A. Siwabessy, Kukusan, Beji, Depok City, West Java 16425</address>
          </div>
        </div>
  
        <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
          <form action="#" class="space-y-4">
            <div>
              <label class="sr-only" for="name">Name</label>
              <input
                class="w-full rounded-lg border border-gray-300 p-3 text-sm"
                placeholder="Name"
                type="text"
                id="name"
              />
            </div>
  
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <div>
                <label class="sr-only" for="email">Email</label>
                <input
                  class="w-full rounded-lg border border-gray-300 p-3 text-sm"
                  placeholder="Email address"
                  type="email"
                  id="email"
                />
              </div>
  
              <div>
                <label class="sr-only" for="phone">Phone</label>
                <input
                  class="w-full rounded-lg border border-gray-300 p-3 text-sm"
                  placeholder="Phone Number"
                  type="tel"
                  id="phone"
                />
              </div>
            </div>
  
            <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
              <div>
                <label
                  for="Option1"
                  class="block w-full cursor-pointer rounded-lg border border-gray-300 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                  tabindex="0"
                >
                  <input class="sr-only" id="Option1" type="radio" tabindex="-1" name="option" />
  
                  <span class="text-sm"> 1 Table </span>
                </label>
              </div>
  
              <div>
                <label
                  for="Option2"
                  class="block w-full cursor-pointer rounded-lg border border-gray-300 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                  tabindex="0"
                >
                  <input class="sr-only" id="Option2" type="radio" tabindex="-1" name="option" />
  
                  <span class="text-sm"> 2 Tables </span>
                </label>
              </div>
  
              <div>
                <label
                  for="Option3"
                  class="block w-full cursor-pointer rounded-lg border border-gray-300 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                  tabindex="0"
                >
                  <input class="sr-only" id="Option3" type="radio" tabindex="-1" name="option" />
  
                  <span class="text-sm"> 2 Tables &raquo; </span>
                </label>
              </div>
            </div>
  
            <div>
              <label class="sr-only" for="message">Message</label>
  
              <textarea
                class="w-full rounded-lg border border-gray-300 p-3 text-sm"
                placeholder="Message"
                rows="8"
                id="message"
              ></textarea>
            </div>
  
            <div class="mt-4">
              <button
                type="submit"
                class="inline-block w-full rounded-lg bg-red-900 px-5 py-3 font-medium text-white sm:w-auto">
                Book
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>