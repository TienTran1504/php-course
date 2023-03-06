
const SurveyListItem = ({ survey }) => {
    return (
        <div className="flex flex-col py-4 px-6 shadow-md bg-white hover:bg-gray-h-[470px]">
            <img src={survey.image_url} alt={survey.title} />
            <h4 className="mt-4 text-lg font-bold">{survey.title}</h4>
        </div>
    );
}

export default SurveyListItem;
