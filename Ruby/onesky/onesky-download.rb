require 'onesky'

# Create client
client = Onesky::Client.new('public key', 'secret key')

project_id = 
project = client.project(project_id)
resp = JSON.parse(project.show)

file_list = Array.new

# User settings
download_dir_path = ''
locale = []
path_reference_file = ''

File.open(path_reference_file).each do |line|
  full_path = line.match(/=(.+)\n/)[1]
  file_list.push(File::basename(full_path))
end


for current_locale in 0...locale.size do
  puts "\nStart downloading '#{locale[current_locale]}' locale files\n\n"

  for current_file in 0...file_list.size do

    resp = project.export_translation(source_file_name: file_list[current_file], locale: locale[current_locale])
    dl_file_name = ""

    lang_dir_path = download_dir_path + locale[current_locale] + '/'

    # create directories for each language if not exist
    FileUtils.mkdir_p(lang_dir_path) unless FileTest.exist?(lang_dir_path)

    # insert a locale name (e.g _de) before .
    (lang_dir_path + file_list[current_file]).each_char do |chr|
      dl_file_name += '_' + locale[current_locale] if chr == '.'
      dl_file_name += chr
    end

    # start downloading selected locale files, if already exists then overrites them
    File.open(dl_file_name, 'a') do |file|
      file.write(resp);
      puts "Downloaded #{dl_file_name}"
      dl_file_name = ""
    end
  end
end
