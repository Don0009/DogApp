using Microsoft.AspNetCore.Mvc;
using FirstMVCApp.Models;
//using System.Collections;

namespace FirstMVCApp.Controllers
{
    public class HelloWorldController : Controller
    {

        private static List<DogViewModel> dogs = new List<DogViewModel>();
        public IActionResult Index()
        {
           

             return View(dogs);


        }

        public IActionResult Create()
        {
            var dogVm = new DogViewModel();
            return View(dogVm);
        }

        // for the form

        public IActionResult CreateDog(DogViewModel dogViewModel)
        {
            //return View("Index");
            dogs.Add(dogViewModel); 
            return RedirectToAction(nameof(Index));

        }

        public string Hello()
        {
            return "Who is theer";
        }
    }
}
