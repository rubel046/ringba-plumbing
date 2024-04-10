@extends('_partials.layout')

@section('content')
<!--BANNER-->
    <section class="banner">
        <section class="overlay mobilewrap">
            <section class="container">
                <h1><strong>Plumbing Services</strong></h1>
                <h2><strong>Plumbing</strong> at Discounted Prices</h2>
                <h3><strong>Call Us Below</strong> to Get Started!</h3>

                <a href="tel:{{env('CONTACT_NUMBER')}}" style="text-decoration: none;">
                    <div class="calloption">
                        <div class="borderside"></div>
                        <img src="images/i2.png" alt="" /> {{env('CONTACT_NUMBER')}}
                    </div>
                </a>
            </section>
        </section>
    </section>
<!--/BANNER-->
     
<!--PAGE-->
    <section class="page mobilewrap">
        <section class="container">
                
                <div class="contentsection">
                    <p>
                        Does a plumber just fix leaky faucets and clogged drains? Do they also train in installation, maintenance, and troubleshooting of fixtures, sinks, tubs, and water heaters? What are the services a reliable plumber in Singapore offer?
                    </p>

                    {{-- <div class="items-wrap">
                        <div class="item">
                            <div class="icon"><span class="fa fa-history"></span></div>
                            <h3>It only takes 3 minutes to <br> Get a Quote</h3>
                        </div>

                        <div class="item">
                            <div class="icon"><span class="fa fa-money"></span></div>
                            <h3>Quotes are Easy and Free!</h3>
                        </div>

                        <div class="item">
                            <div class="icon"><span class="fa fa-thumbs-up"></span></div>
                            <h3>There is no Obligation to Buy</h3>
                        </div>
                    </div> --}}
                </div>


                <div class="contentsection-2">
                    <h2>Generic Gallery</h2>
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr1.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-1"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr1.jpg" alt="">
                            </div>
                            <h4>PLUMBING REPAIRS</h4>
                        </div>

                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr2.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr2.jpg" alt="">
                            </div>
                            <h4>EMERGENCY PLUMBING SERVICES</h4>
                        </div>


                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr1.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr3.jpg" alt="" style="height: 220px">
                            </div>
                            <h4>Leak REPAIRS</h4>
                        </div>


                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr2.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr4.jpg" alt="" style="height: 220px">
                            </div>
                            <h4>WATER HEATER SERVICES</h4>
                        </div>

                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr1.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr5.jpg" alt="" style="height: 220px">
                            </div>
                            <h4>TOILET REPLACEMENT & REPAIR</h4>
                        </div>

                        <div class="item">
                            <div class="thumb">
                                {{-- <a href="images/gr1.jpg" class="overlay fancybox" data-fancybox-group="gallery" title="Title-2"><span class="fa fa-expand"></span></a> --}}
                                <img src="images/gr6.jpg" alt="" style="height: 220px">
                            </div>
                            <h4>HOWERS & TUBS</h4>
                        </div>
                    </div>
                </div>



                <div class="contentsection-3">
                    <img src="images/repair.jpg" alt="" class="featured" />
                    <div class="details">
                        <h2>Installation, Inspection, and Replacement</h2>
                        <p>
                            For professional plumbing services in Singapore, it's crucial to rely on licensed experts for installing, inspecting, and replacing fixtures in residential and commercial properties. Licensed plumbers are equipped to handle a range of tasks, from installing toilets, sinks, showers, and faucets to managing complex systems like water heaters, pipes, and septic tanks. 
                            Recognizing early signs of wear, such as unusual noises, running water, or stains near fixtures, is essential to prevent further damage. Delaying repairs can lead to costly leaks and extensive renovations. By addressing issues promptly, licensed plumbers ensure the integrity of plumbing systems while promoting cost-efficiency for property owners.
                        </p>
                    </div>
                </div>

                <div class="contentsection-3">
                    <img src="images/toilet-install-atf.webp" alt="" class="featured" style="height: 355px" />
                    <div class="details">
                        <h2>Toilet Repair</h2>
                        <p>
                            Toilets in commercial spaces are prone to issues like clogs and malfunctions. Quick fixes by reputable plumbers are essential during emergencies, but establishing proper waste disposal management and regular maintenance is key to preventing major problems. Neglecting restroom issues can disrupt daily operations and harm your business reputation. Prioritize proactive measures to maintain functionality and uphold a positive image for your establishment.
                        </p>
                    </div>
                </div>
                <div class="contentsection-3">
                    <img src="images/ft1.jpg" alt="" class="featured" />
                    <div class="details">
                        <h2>Leak Repairs</h2>
                        <p>
                            Leaks are so common that some households choose to ignore them until they affect the water bill or damage the structure’s integrity. Warning signs include damp or stained walls, ceilings or floors, running water from fixtures, and unusual noises coming from the pipes. While there are do-it-yourself tutorials on the Internet about how to fix leaks, sometimes the issue isn’t simply solved by looking for a defective pipe or fixture. Call a reliable plumber in Singapore to fix this problem, because some leaks are not easy to spot (these are called “silent leaks”), especially if the problem is in the piping system. An expert plumbing contractor will also be able to tell you if your house needs complete repiping, especially if it’s an old commercial property or apartment.
                        </p>
                    </div>
                </div>
                <div class="contentsection-3">
                    <img src="images/Drain-cleaning-1.jpg" alt="" class="featured" />
                    <div class="details">
                        <h2>Drain Cleaning</h2>
                        <p>
                            The drains in the kitchen sinks and bathrooms will eventually accumulate dirt and debris over time no matter how much you keep them clean. That is why you should schedule a regular cleaning and maintenance with a licensed plumber who can effectively remove the dirt and debris to prevent drain clogging. Although there are commercial products that claim they can get rid of the accumulated materials in the drains that cause blockage, they do not work as intended all the time and might even aggravate the problem. If it’s an emergency, you should always keep the contact details of a trusted 24 hours plumber who can help you in no time.
                        </p>
                    </div>
                </div>
                <div class="contentsection-3">
                    <img src="images/pipe-repair-services.jpg" alt="" class="featured" />
                    <div class="details">
                        <h2>Pipe Repair and Replacement</h2>
                        <p>
                            Pipes that leak can lead to bigger structural problems when not repaired as soon as possible. It could cause cracks in the building’s foundation and walls if they burst, making repairs costlier. Consult a plumbing services company that specializes in pipelaying and pipefitting whenever you’re having the building repaired or renovated. They are skilled in the task of setting and securing the pipes properly to prevent problems in the future. They will also be able to give you tips when to replace old pipes to prevent damages in the plumbing works.
                        </p>
                    </div>
                </div>
                <div class="contentsection-3">
                    <img src="images/Water-Heater-Repair-in-Welland-ON.webp" alt="" class="featured" />
                    <div class="details">
                        <h2>Water Heater Services</h2>
                        <p>
                            Water heaters pose a lot of problems especially if they are nearing the end of their lifespan (they usually last up to twelve years), that is why you should contact a licensed plumber in Singapore to perform the installation, maintenance, and repair of your water heater. The plumber will also be able to give you tips on which models you should install for a commercial property and how much an apartment building needs to prevent frequent breakdowns and fluctuations in water temperature.
                        </p>
                    </div>
                </div>

                <div class="contentsection-3 elementor elementor-element-59670827 ">
                    <div class="elementor-element elementor-element-2abf588 e-con-full e-flex e-con e-child" data-id="2abf588" data-element_type="container">
                        <div class="elementor-element elementor-element-75d02ff2 e-flex e-con-boxed e-con e-child" data-id="75d02ff2" data-element_type="container">
                            <div class="e-con-inner">
                                <div class="elementor-element elementor-element-7ddf3255 elementor-widget elementor-widget-heading" data-id="7ddf3255" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-xl">Areas We Serve:</h3>		
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-176c2933 elementor-widget elementor-widget-text-editor" data-id="176c2933" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p><a href="https://www.laportapottyrental.com/burbank-rental/">Burbank</a> | <a href="https://www.laportapottyrental.com/costa-mesa-rental/">Costa Mesa</a> | <a href="https://www.laportapottyrental.com/downey-rental/">Downey</a> | <a href="https://www.laportapottyrental.com/el-monte-rental/">El Monte</a> | <a href="https://www.laportapottyrental.com/fullerton-rental/">Fullerton</a> | <a href="https://www.laportapottyrental.com/garden-grove-rental/">Garden Grove</a> | <a href="https://www.laportapottyrental.com/glendale-rental/">Glendale</a> | <a href="https://www.laportapottyrental.com/inglewood-rental/">Inglewood</a> | <a href="https://www.laportapottyrental.com/lancaster-rental/">Lancaster</a> | <a href="https://www.laportapottyrental.com/mission-viejo-rental/">Mission Viejo</a> | <a href="https://www.laportapottyrental.com/norwalk-rental/">Norwalk</a> | <a href="https://www.laportapottyrental.com/orange-rental/">Orange</a> | <a href="https://www.laportapottyrental.com/palmdale-rental/">Palmdale</a> | <a href="https://www.laportapottyrental.com/pasadena-rental/">Pasadena</a> | <a href="https://www.laportapottyrental.com/pomona-rental/">Pomona</a> |</p>					
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                            <div class="elementor-element elementor-element-17b3dd38 e-con-full e-flex e-con e-child" data-id="17b3dd38" data-element_type="container">
                            <div class="elementor-element elementor-element-3c60c0a5 elementor-widget__width-inherit elementor-widget elementor-widget-google_maps" data-id="3c60c0a5" data-element_type="widget" data-widget_type="google_maps.default">
                            <div class="elementor-widget-container">
                        <style>/*! elementor - v3.20.0 - 26-03-2024 */
                    .elementor-widget-google_maps .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps .elementor-custom-embed{line-height:0}.elementor-widget-google_maps iframe{height:300px}</style>		<div class="elementor-custom-embed">
                        <iframe class="address-map" loading="lazy" src="https://maps.google.com/maps?q=Los%20Angeles%2C%20California&amp;t=m&amp;z=9&amp;output=embed&amp;iwloc=near" title="Los Angeles, California" aria-label="Los Angeles, California"></iframe>
                    </div>
                            </div>
                            </div>
                            </div>
                </div>

             

        </section>
    </section>
<!--PAGE ENDS-->
@endsection
