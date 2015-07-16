require 'nokogiri'
require 'anemone'

puts "Specify a name of tecknology e.g) Java, Python,,,,"
tech_name = gets.chomp.capitalize
found = false
opts = {
	depth_limit: 0
}

Anemone.crawl("http://vancouver.craigslist.ca/search/sof", opts) do |anemone|
	anemone.on_every_page do |page|
		page.doc.xpath("//p[@class='row']/span[@class='txt']/span[@class='pl']").each do |node|
			job_title = node.xpath("./a[@class='hdrlnk']/text()").to_s
			if job_title.include?(tech_name)
				puts "\n"
				puts job_title 
				puts "-------------------\n\n"
				found = true
			end
		end
		puts "Nothing found" unless found
	end
end