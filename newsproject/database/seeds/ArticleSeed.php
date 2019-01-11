<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article')->insert([
            'article_title' =>'Voyager 2 spacecraft enters interstellar space',
            'article_text' =>'Voyager 2 has entered interstellar space. The spacecraft slipped out of the huge bubble of particles that encircles the solar system on November 5, becoming the second ever human-made craft to cross the heliosphere, or the boundary between the sun and the stars.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\121018_LG_Voyager-2_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'1',
            'article_journalist_id'=>'1'
        ]);
        DB::table('article')->insert([
            'article_title' =>'Known as the ‘mother of Hubble,’ astronomer Nancy Roman dies at 93',
            'article_text' =>'Nancy Roman, a groundbreaking astronomer known as the “Mother of Hubble,” died on December 25 at the age of 93.

            As NASA’s first Chief of Astronomy, Roman oversaw the early planning and development of the Hubble Space Telescope (SN: 10/10/64, p. 231) as well as other space observatories and satellites. “I knew that taking on this responsibility would mean that I could no longer do research, but the challenge of formulating a program from scratch that I believed would influence astronomy for decades to come was too great to resist,” she once said in an interview.
            
            Roman pitched the Hubble project relentlessly, lobbying for early funding and writing testimony for NASA representatives to help convince Congress to invest in one of the most expensive scientific instruments ever made.
            
            Eleven years after she retired, astronauts aboard the space shuttle Discovery deployed the $1.5 billion telescope in 1990, making Hubble the first optical telescope to operate in space. Because it orbits far above Earth’s atmosphere, the telescope is unencumbered by clouds, rain and light pollution, giving astronomers and the public an unprecedented view of the universe.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\123118_CM_nancy-roman_feat.jpg',
            'article_istop' =>true,
            'article_category_id'=>'2',
            'article_journalist_id'=>'2'
        ]);
        DB::table('article')->insert([
            'article_title' =>'Astronomers find far-flung wind from a black hole in the universe’s first light',
            'article_text' =>'Scientists have spotted wind from a supermassive black hole blowing at much greater distances than ever before.
            
            Astronomer Mark Lacy and colleagues used the Atacama Large Millimeter Array in Chile to observe the universe’s first light, and found evidence of gusts flowing from a type of black hole called a quasar. The wind extends about 228,000 light-years away from the galaxy that surrounds the quasar. Previously, astronomers had seen signs of these winds only about 3,000 light-years from their galaxies.
            
            The result, published November 12 at arXiv.org, could help resolve questions about how black holes can grow with their galaxies, or shut galaxies down for good.
            
            Black holes are best known for gravitationally gobbling everything that veers too close. Paradoxical as it sounds, supermassive black holes can also send material in the opposite direction, driving powerful flows of charged gas and plasma away from their host galaxies.
            
            These black holes are victims of their own success, pulling in more material than they can consume at once. The excess material surrounds black holes in a tight swirling disk, where friction heats it to hundreds of millions of degrees Celsius. The black hole plus that bright disk is a quasar.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\112718_LG_black-hole-wind_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'1',
            'article_journalist_id'=>'2'
        ]);
        DB::table('article')->insert([
            'article_title' =>'A new app tracks breathing to detect an opioid overdose',
            'article_text' =>'A new smartphone app may help people who shoot up alone get medical treatment if they accidentally overdose.

            The app, dubbed Second Chance, monitors its user for breathing problems that foreshadow an opioid overdose (SN: 3/31/18, p. 18). In an emergency, the app could call 911 or send an SOS to friends or family who could provide opioid-counteracting medication.
            
            “Being able to track an overdose when a person may be by themselves could significantly improve the ability to save lives,” says psychiatrist Nora Volkow, director of the National Institute on Drug Abuse in Bethesda, Md., who was not involved in developing the app. More than 115 people die from an opioid overdose every day in the United States, according to the NIDA, and many victims are alone or with people who are either untrained or too impaired to help.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\010819_MT_opioid-app_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'3',
            'article_journalist_id'=>'1'
        ]);
        DB::table('article')->insert([
            'article_title' =>'A new algorithm could help protect planes from damaging volcanic ash',
            'article_text' =>'Five to 10 minutes. That’s what it takes for superheated volcanic ash to shoot 11 kilometers into the sky — reaching altitudes at which commercial jets cruise and potentially harming their engines.
            
            Now scientists have developed a new algorithm that can identify and track explosive ash clouds soon after volcanoes erupt. Using satellite imagery, the program can measure the temperature, height and trajectory of the expanding clouds within about three minutes, researchers report online November 8 in Earth and Space Science.
            
            By tracking these ash plumes in near real time, scientists can alert aviation authorities if there is a need to alter any volcanic ash advisories or change the flight paths of any planes barreling toward hazardous eruptions. “Timely detection is crucial,” says study coauthor Michael Pavolonis, a physical scientist with the National Oceanic and Atmospheric Administration in Madison, Wis.
            
            The new technology could be especially useful for tracking unmonitored volcanoes in remote regions. Of the roughly 1,500 active volcanoes across the globe, fewer than 10 percent are monitored.
            
            The algorithm works by scanning images taken by weather satellites like NOAA and NASA’s joint venture, the Geostationary Operational Environmental Satellite system, and Japan’s Himawari-8. These satellites zip around the equator snapping pictures of large swaths of the Earth as frequently as every 30 seconds.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\112018_jl_volcanic_feat_free.jpg',
            'article_istop' =>true,
            'article_category_id'=>'4',
            'article_journalist_id'=>'1'
        ]);
        DB::table('article')->insert([
            'article_title' =>'Poison toilet paper reveals how termites help rainforests resist drought',
            'article_text' =>'It took hundreds of teabags and thousands of rolls of toilet paper for tropical ecologist Kate Parr and her colleagues to demonstrate that termites help tropical rainforests resist drought. Forests with more termites show more soil moisture, leaf litter decomposition and seedling survival during a drought than forests with fewer termites, the scientists report January 10 in Science.
            
            The study was part of a project by the University of Liverpool and the Natural History Museum in London to examine how ants and termites affect decomposition and consumption of seeds, fruits and carcasses in rainforests of the Maliau Basin Conservation Area in northern Borneo.
            
            Termites play an important role in tropical ecosystems, but “nobody knows exactly how important they are,” says Parr from the University of Liverpool. To isolate the effect of termites from the other soil critters, Parr’s team exploited termites’ cellulose diet.
            
            In 2014, the researchers buried insecticide-soaked rolls of toilet paper as well as tainted teabags in four forest plots, each about the size of five Olympic swimming pools. Toilet rolls are like cotton candy for termites, Parr says, “this really amazing, easy-to-digest food for termites.” The team used poisoned teabags just in case some termites “were fussy and didn’t eat the toilet paper.” Termites died after eating the poisoned baits, while the 14 other most commonly found invertebrate groups, including ants and beetles, were unaffected. None of these other critters nosh on hard-to-digest cellulose.',
            'article_image' =>'C:\xampp\htdocs\NewsProject\newsproject\public\images\010719_YHL_termite_NEW_feat.jpg',
            'article_istop' =>false,
            'article_category_id'=>'5',
            'article_journalist_id'=>'1'
        ]);
    }
}
